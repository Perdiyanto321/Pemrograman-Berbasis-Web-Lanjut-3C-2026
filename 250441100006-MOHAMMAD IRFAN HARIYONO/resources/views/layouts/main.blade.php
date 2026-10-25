<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Perpustakaan Digital')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    {{-- Header --}}
    <header class="header">
        <h1>Perpustakaan Digital</h1>
        <p>Sistem Informasi Perpustakaan Digital</p>
    </header>

    {{-- Navbar --}}
    <nav class="navbar">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
        <a href="{{ route('buku.index') }}" class="{{ request()->routeIs('buku.*') ? 'active' : '' }}">Daftar Buku</a>
    </nav>

    {{-- Konten Utama --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Perpustakaan Digital. All Rights Reserved.</p>
    </footer>
</body>
</html>