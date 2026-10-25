@props(['id', 'judul', 'penulis', 'tahun'])

<div class="kartu-buku">
    <h3 class="kartu-buku__judul">{{ $judul }}</h3>

    <p class="kartu-buku__penulis">{{ $penulis }}</p>

    <p class="kartu-buku__tahun">Tahun: {{ $tahun }}</p>

    @isset($kategori)
    <span class="kartu-buku__kategori">{{ $kategori }}</span>
    @endisset

    <a href="{{ route('buku.show', $id) }}" class="btn btn-detail">Lihat Detail</a>
</div>