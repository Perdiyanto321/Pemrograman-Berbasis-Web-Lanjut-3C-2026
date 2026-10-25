@props([
    'judul' => '-',
    'penulis' => '-',
    'tahun' => '-',
    'cover' => ''
])

<div class="card-buku">
    <div class="cover-wrapper">
        <img src="{{ $cover }}" alt="{{ $judul }}" class="cover-img">
        
        <div class="cover-overlay">
            {{ $slot }} 
        </div>
    </div>

    <div class="card-info">
        <h3 class="buku-judul">{{ $judul }}</h3>
        <p class="buku-subtext">{{ $penulis }} • {{ $tahun }}</p>
    </div>
</div>