<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan AQU</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header class="header">
        <h1>Perpustakaan AQU</h1>
    </header>

    <nav class="navbar">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('buku.index') }}">Daftar Buku</a>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Perpustakaan AQU. All rights reserved.</p>
    </footer>
</body>
</html>