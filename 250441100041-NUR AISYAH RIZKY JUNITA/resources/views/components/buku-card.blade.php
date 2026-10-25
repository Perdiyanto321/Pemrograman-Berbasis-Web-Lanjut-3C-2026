@props(['id', 'judul', 'penulis', 'tahun'])
<div class="book-card">

    <div class="book-icon">
    </div>

    <div class="book-content">

        <span class="book-label">
            Buku
        </span>

        <h3>{{ $judul }}</h3>

        <p class="author">
            {{ $penulis }}
        </p>

        <p class="year">
            Tahun terbit: {{ $tahun }}
        </p>

        <div class="book-category">
            {{ $slot }}
        </div>

        <a href="{{ route('buku.show', $id) }}" class="detail-btn">
            Lihat Detail
        </a>

    </div>

</div>