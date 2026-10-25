@props(['judul', 'penulis', 'tahun', 'url'])

<div class="kartu">
    <span class="tag">{{ $slot }}</span>
    <h3>{{ $judul }}</h3>
    <p>{{ $penulis }}</p>
    <p class="tahun">{{ $tahun }}</p>
    <a href="{{ $url }}" class="btn btn-sm">Lihat Detail</a>
</div>
