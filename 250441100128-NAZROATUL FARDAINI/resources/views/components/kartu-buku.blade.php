@props(['judul', 'penulis', 'tahun', 'gambar'])

<div class="card">
    <img src="{{ asset($gambar) }}" alt="{{ $judul }}" class="card-img">
    <h3>{{ $judul }}</h3>
    <p class="penulis">Penulis: {{ $penulis }}</p>
    <p class="tahun">Tahun: {{ $tahun }}</p>
    <div class="card-footer">
        {{ $slot }}
    </div>
</div>