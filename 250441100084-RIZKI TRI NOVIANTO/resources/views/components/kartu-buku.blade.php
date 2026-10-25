@props(['buku'])

<article class="book-card">
    <div class="book-cover">{{ strtoupper(substr($buku['judul'], 0, 1)) }}</div>

    <div class="book-body">
        {{-- Default slot (bagian tambahan, mis. badge kategori) --}}
        @if (!$slot->isEmpty())
            <div class="book-extra">{{ $slot }}</div>
        @endif

        <h3 class="book-title">{{ $buku['judul'] }}</h3>
        <p class="book-meta">penulis : {{ $buku['penulis'] }}</p>
        <p class="book-meta">Terbit : {{ $buku['tahun_terbit'] }}</p>

        <a href="{{ route('buku.show', $buku['id']) }}" class="btn btn-primary btn-block">Lihat Detail</a>
    </div>

    {{-- Named slot: footer --}}
    @isset($footer)
        <div class="book-footer">{{ $footer }}</div>
    @endisset
</article>
