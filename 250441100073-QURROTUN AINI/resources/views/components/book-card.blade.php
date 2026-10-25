<div class="book-card">

    <h3>{{ $book['judul'] }}</h3>

    <p>
        <strong>Penulis:</strong>
        {{ $book['penulis'] }}
    </p>

    <p>
        <strong>Tahun Terbit:</strong>
        {{ $book['tahun'] }}
    </p>

    <div class="book-card-extra">
        {{ $slot }}
    </div>

</div>