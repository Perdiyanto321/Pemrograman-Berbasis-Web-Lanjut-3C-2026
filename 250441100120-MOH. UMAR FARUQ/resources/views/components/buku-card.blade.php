@props(['buku'])

<div class="card">
    <div>
        <h3>{{ $buku['judul'] }}</h3>
        <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
        <p><strong>Tahun Terbit:</strong> {{ $buku['tahun_terbit'] }}</p>
        
        {{-- Extra Slot --}}
        @if (isset($extra))
            <div class="extra-info">
                {{ $extra }}
            </div>
        @endif
    </div>
  
    <a href="{{ route('buku.show', $buku['id']) }}" class="btn">Lihat Detail</a>
</div>  
 


 