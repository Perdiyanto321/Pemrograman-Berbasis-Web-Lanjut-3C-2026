<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Judul Default')</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    <div class="container">
        <header>
            <h1>Perpustakaan Perdi</h1>
        </header>

        <nav>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('buku.index') }}">Daftar Buku</a>
        </nav>
    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 - Perdiyanto 250441100052</p>
    </footer>

</body>
</html>