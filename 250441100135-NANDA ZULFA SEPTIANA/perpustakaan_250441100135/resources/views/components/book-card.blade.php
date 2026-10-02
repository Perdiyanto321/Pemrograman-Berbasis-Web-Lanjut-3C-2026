<div class="book-card">

    <div class="book-cover">
        <img
            src="{{ asset('images/buku/' . $buku['foto']) }}"
            alt="{{ $buku['judul'] }}"
        >
    </div>

    <div class="book-content">

        <span class="book-category">
            {{ $buku['kategori'] }}
        </span>

        <h3 class="book-title">
            {{ $buku['judul'] }}
        </h3>

        <p class="book-author">
            <strong>Penulis:</strong>
            {{ $buku['penulis'] }}
        </p>

        <p class="book-year">
            <strong>Tahun Terbit:</strong>
            {{ $buku['tahun'] }}
        </p>


        <!-- Named Slot -->
        <div class="book-extra">
            {{ $slot }}
        </div>


        <a
            href="{{ route('buku.show', $buku['id']) }}"
            class="btn btn-detail"
        >
            Lihat Detail
        </a>

    </div>

</div>