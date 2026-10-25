<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan') | Perpustakaan Digital</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- HEADER --}}
    <header class="site-header">
        <div class="container header-inner">
            <div>
                <h1 class="brand-name">Perpustakaan Digital</h1>
                <p class="brand-tagline">Jendela ilmu, tersedia kapan saja</p>
            </div>
        </div>
    </header>

    {{-- NAVBAR --}}
    <nav class="navbar">
        <div class="container navbar-inner">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('buku.index') }}" class="nav-link {{ request()->routeIs('buku.*') ? 'active' : '' }}">Daftar Buku</a>
        </div>
    </nav>

    {{-- KONTEN --}}
    <main class="container main-content">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Perpustakaan Digital By Rizki </p>
        </div>
    </footer>
</body>
</html>
