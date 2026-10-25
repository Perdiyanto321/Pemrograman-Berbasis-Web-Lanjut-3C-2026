<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | Perpustakaan Digital</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="header__title">📚 Perpustakaan Digital</h1>
            <p class="header__subtitle">Temukan buku favoritmu di sini</p>
        </div>
    </header>

    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('buku.index') }}" class="{{ request()->routeIs('buku.*') ? 'active' : '' }}">Daftar Buku</a>
        </div>
    </nav>

    <main class="container content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            &copy; {{ date('Y') }} Perpustakaan Digital &mdash; Praktikum PBWL Modul 1
        </div>
    </footer>
</body>
</html>