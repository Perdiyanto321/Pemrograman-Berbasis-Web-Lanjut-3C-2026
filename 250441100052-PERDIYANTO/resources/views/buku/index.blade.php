@extends('layouts.perpustakaan')

@section('title','Daftar Buku')

@section('content')
<h2>Semua Buku</h2>

<div id="alert-area"></div>

<form id="form-buku" class="form-buku" novalidate>
    <input type="hidden" id="buku-id">

    <div class="kolom-form">
        <label for="buku-kategori_id">Kategori</label>
        <select id="buku-kategori_id">
            <option value="">-- Pilih kategori --</option>
        </select>
        <small class="err" id="err-kategori_id"></small>
    </div>

    <div class="kolom-form">
        <label for="buku-judul">Judul</label>
        <input type="text" id="buku-judul">
        <small class="err" id="err-judul"></small>
    </div>

    <div class="kolom-form">
        <label for="buku-penulis">Penulis</label>
        <input type="text" id="buku-penulis">
        <small class="err" id="err-penulis"></small>
    </div>

    <div class="kolom-form">
        <label for="buku-tahun_terbit">Tahun Terbit</label>
        <input type="number" id="buku-tahun_terbit">
        <small class="err" id="err-tahun_terbit"></small>
    </div>

    <div class="aksi-form">
        <button type="submit" id="btn-simpan">Simpan</button>
        <button type="button" id="btn-batal">Batal</button>
    </div>
</form>

<table class="tabel-buku">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="tbody-buku">
        <tr>
            <td colspan="6">Memuat data...</td>
        </tr>
    </tbody>
</table>

<div class="paginasi">
    <button type="button" id="btn-prev">&laquo; Sebelumnya</button>
    <span id="info-halaman"></span>
    <button type="button" id="btn-next">Berikutnya &raquo;</button>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/buku-client.js') }}"></script>
@endpush