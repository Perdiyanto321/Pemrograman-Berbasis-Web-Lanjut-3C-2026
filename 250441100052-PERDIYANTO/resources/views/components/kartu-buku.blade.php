@props(["judul", "penulis", "tahun", "id"])

<div class="kartu-buku">
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <h3>{{ $judul }}</h3>
    <p>Penulis: {{ $penulis }}</p>
    <p>Tahun Terbit: {{ $tahun }}</p>
    @isset($kategori)
        <p>Kategori: {{ $kategori }}</p>
    @endisset

    <a href="{{ route('buku.show', $id) }}">Lihat Detail</a>
</div>