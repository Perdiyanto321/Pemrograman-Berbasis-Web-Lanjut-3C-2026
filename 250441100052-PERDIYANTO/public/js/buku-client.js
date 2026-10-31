const API = '/api';
const FIELD = ['kategori_id', 'judul', 'penulis', 'tahun_terbit'];
const $ = (id) => document.getElementById(id);
let halaman = 1;

const esc = (t) => String(t ?? '').replace(/[&<>"']/g, (c) => ({
    '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;'
}[c]));

class ApiError extends Error {
    constructor(status, message, errors = {}) {
        super(message);
        this.status = status;   // 0 = gagal jaringan
        this.errors = errors;   // diisi pada respons 422
    }
}

const pesan = (teks, jenis = 'sukses') => {
    $('alert-area').innerHTML = `<div class="pesan pesan-${jenis}">${esc(teks)}</div>`;
};

async function apiRequest(path, { method = 'GET', body = null } = {}) {
    const headers = { Accept: 'application/json' };
    if (body) headers['Content-Type'] = 'application/json';

    let res;
    try {
        res = await fetch(API + path, {
            method,
            headers,
            body: body ? JSON.stringify(body) : undefined,
        });
    } catch {
        throw new ApiError(0, 'Tidak dapat terhubung ke server.');
    }

    const data = await res.json().catch(() => null);

    if (!res.ok) {
        throw new ApiError(res.status, data?.message ?? `HTTP ${res.status}`, data?.errors ?? {});
    }
    return data;
}

// untuk eror

function tanganiError(err) {
    FIELD.forEach((f) => { $(`err-${f}`).textContent = ''; });

    if (err.status === 422) {
        Object.entries(err.errors).forEach(([f, m]) => {
            if ($(`err-${f}`)) $(`err-${f}`).textContent = m.join(' ');
        });
        pesan('Data belum valid. Periksa isian formulir.', 'peringatan');
    } else if (err.status === 404) {
        pesan('Data tidak ditemukan. Mungkin sudah dihapus.', 'peringatan');
        kosongkanForm();
        muatBuku(halaman);
    } else if (err.status === 0) {
        pesan(err.message, 'error');
    } else {
        pesan(`Terjadi kesalahan pada server (kode ${err.status}).`, 'error');
    }
}

// membaca data

async function muatKategori() {
    try {
        const { data } = await apiRequest('/rekap/buku-per-kategori');
        $('buku-kategori_id').insertAdjacentHTML('beforeend',
            data.map((k) => `<option value="${k.id}">${esc(k.nama)}</option>`).join(''));
    } catch (err) { tanganiError(err); }
}

async function muatBuku(page = 1) {
    try {
        const json = await apiRequest(`/buku?page=${page}`);

        // Halaman kosong karena data terakhirnya baru dihapus: mundur satu halaman
        if (json.data.length === 0 && page > 1) {
            return muatBuku(page - 1);
        }

        halaman = json.meta.current_page;

        $('tbody-buku').innerHTML = json.data.map((b, i) => `
            <tr>
                <td>${(json.meta.from ?? 1) + i}</td>
                <td>${esc(b.kategori ?? '-')}</td>
                <td>${esc(b.judul_buku)}</td>
                <td>${esc(b.penulis)}</td>
                <td>${esc(b.tahun)}</td>
                <td>
                    <button type="button" data-aksi="ubah" data-id="${b.id}">Ubah</button>
                    <button type="button" class="btn-hapus" data-aksi="hapus" data-id="${b.id}">Hapus</button>
                </td>
            </tr>`).join('') || '<tr><td colspan="6">Belum ada data.</td></tr>';

        $('info-halaman').textContent = `Halaman ${json.meta.current_page} dari ${json.meta.last_page}`;
        $('btn-prev').disabled = json.links.prev === null;
        $('btn-next').disabled = json.links.next === null;
    } catch (err) {
        $('tbody-buku').innerHTML = '<tr><td colspan="6">Data tidak dapat ditampilkan.</td></tr>';
        pesan(err.status === 0 ? err.message : `Gagal memuat data (kode ${err.status}).`, 'error');
    }
}

function kosongkanForm() {
    $('form-buku').reset();
    $('buku-id').value = '';
    $('btn-simpan').textContent = 'Simpan';
    FIELD.forEach((f) => { $(`err-${f}`).textContent = ''; });
}

function isiForm(b) {
    FIELD.forEach((f) => { $(`err-${f}`).textContent = ''; });
   
    $('buku-id').value = b.id;
    $('buku-kategori_id').value = b.id_kategori ?? '';
    $('buku-judul').value = b.judul_buku ?? '';
    $('buku-penulis').value = b.penulis ?? '';
    $('buku-tahun_terbit').value = b.tahun ?? '';
    $('btn-simpan').textContent = 'Simpan Perubahan';
    $('buku-judul').focus();
}

async function bukaFormUbah(id) {
    try {
        const { data } = await apiRequest(`/buku/${id}`);
        isiForm(data);
    } catch (err) { tanganiError(err); }
}

async function simpan(e) {
    e.preventDefault();

    const id = $('buku-id').value;   // kosong = tambah, terisi = ubah
    const body = {
        kategori_id: $('buku-kategori_id').value || null,
        judul: $('buku-judul').value.trim(),
        penulis: $('buku-penulis').value.trim(),
        tahun_terbit: $('buku-tahun_terbit').value === '' ? null : Number($('buku-tahun_terbit').value),
    };

    try {
        await apiRequest(id ? `/buku/${id}` : '/buku', {
            method: id ? 'PUT' : 'POST',
            body,
        });
        pesan(id ? 'Buku berhasil diperbarui.' : 'Buku berhasil ditambahkan.');
        kosongkanForm();
        await muatBuku(id ? halaman : 1);
    } catch (err) { tanganiError(err); }
}

// hapus data
async function hapus(id) {
    if (!confirm('Yakin ingin menghapus buku ini?')) return;   // dibatalkan: tidak ada request

    try {
        const data = await apiRequest(`/buku/${id}`, { method: 'DELETE' });
        pesan(data?.message ?? 'Buku berhasil dihapus.');
        if ($('buku-id').value === String(id)) kosongkanForm();
        await muatBuku(halaman);
    } catch (err) {
        if (err.status >= 500) {
            pesan('Buku tidak dapat dihapus. Kemungkinan buku masih memiliki data peminjaman.', 'error');
        } else {
            tanganiError(err);
        }
    }
}

// inisialisasi
document.addEventListener('DOMContentLoaded', async () => {
    $('form-buku').onsubmit = simpan;
    $('btn-batal').onclick = kosongkanForm;
    $('btn-prev').onclick = () => muatBuku(halaman - 1);
    $('btn-next').onclick = () => muatBuku(halaman + 1);

    // Satu listener untuk semua tombol Ubah/Hapus (tombolnya dibuat ulang tiap tabel digambar)
    $('tbody-buku').onclick = (e) => {
        const tombol = e.target.closest('button[data-aksi]');
        if (!tombol) return;
        if (tombol.dataset.aksi === 'hapus') hapus(tombol.dataset.id);
        else bukaFormUbah(tombol.dataset.id);
    };

    await muatKategori();
    await muatBuku(1);
});