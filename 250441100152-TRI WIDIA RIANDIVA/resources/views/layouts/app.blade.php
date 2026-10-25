<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Diva</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header class="header-utama">
        <div class="nav-bungkus">
            <p class="judul">PERPUSTAKAAN DIVA</p>
        
            <nav class="nav-utama">
                <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('buku.index') }}" class="{{ request()->routeIs('buku.index') ? 'active' : '' }}">Daftar Buku</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('konten')
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2026 Perpustakaan Diva. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>