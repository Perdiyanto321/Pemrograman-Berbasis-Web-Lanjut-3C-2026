<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Perpustakaan')</title>

    @vite(['resources/css/app.css'])
</head>
<body>

    {{-- Header --}}
    <header class="header">
        <div class="container">
            <h1>Perpustakaan 250441100073</h1>
            <p>Tempat membaca dan menemukan berbagai koleksi buku</p>
        </div>
    </header>

    {{-- Navbar --}}
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('buku.index') }}">Daftar Buku</a>
        </div>
    </nav>

    {{-- Konten --}}
    <main class="container content">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 Perpustakaan 250441100073</p>
        </div>
    </footer>

</body>
</html>