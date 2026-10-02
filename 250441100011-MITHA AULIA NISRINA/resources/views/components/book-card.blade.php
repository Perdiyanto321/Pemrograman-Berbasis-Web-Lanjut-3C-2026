<div class="book-card">

    <div class="book-cover">

        <span class="book-category">
            {{ $slot }}
        </span>

        <img src="{{ asset('images/books/' . $image) }}" alt="Cover {{ $title }}">

    </div>


    <div class="book-content">

        <span class="book-year">
            {{ $year }}
        </span>

        <h3>
            {{ $title }}
        </h3>

        <p class="book-author">
            {{ $author }}
        </p>

        <a href="{{ route('buku.show', $id) }}" class="detail-button">
            Lihat Detail
            <span>→</span>
        </a>

    </div>

</div>