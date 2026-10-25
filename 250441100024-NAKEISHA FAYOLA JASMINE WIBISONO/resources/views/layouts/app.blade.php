<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') - e-Pustaka</title>

    @vite(['resources/css/app.css'])
</head>
<body>

    <header class="app-header">
        <div class="container">
            <h1 class="app-name">e-Pustaka</h1>
        </div>
    </header>

    <nav class="app-navbar">
        <div class="container">

            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                Beranda
            </a>
            <a href="{{ route('buku.index') }}" class="{{ request()->routeIs('buku.*') ? 'active' : '' }}">
                Daftar Buku
            </a>
        </div>
    </nav>

    <main class="container app-content">
        @yield('content')
    </main>

    <footer class="app-footer">
        <div class="container">
            &copy; {{ date('Y') }} e-Pustaka
        </div>
    </footer>

</body>
</html>
