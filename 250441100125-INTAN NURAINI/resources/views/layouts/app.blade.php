<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Perpustakaan')</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    <header>
        <div class="container">
            <h1>Perpustakaan Bersama</h1>
            <p>jelajahi koleksi buku dan temukan bacaan favoritmu</p>
        </div>
    </header>

    <nav>
        <div class="container nav-container">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('buku.index') }}">Daftar Buku</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Perpustakaan bersama</p>
    </footer>

</body>
</html>