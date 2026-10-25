@props(['buku'])

<div class="card">
    <div class="card-body">
        <h3 class="card-title">{{ $buku['judul'] }}</h3>
        <p class="card-text"><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
        <p class="card-text"><strong>Tahun Terbit:</strong> {{ $buku['tahun_terbit'] }}</p>
        
        {{-- Slot Tambahan (Named Slot / Slot Biasa) --}}
        @if (isset($slot) && $slot->isNotEmpty())
            <div class="card-slot">
                {{ $slot }}
            </div>
        @endif

        <a href="{{ route('buku.show', $buku['id']) }}" class="btn">Lihat Detail</a>
    </div>
</div>