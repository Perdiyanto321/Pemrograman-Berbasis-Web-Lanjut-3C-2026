<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Efqai')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header>
        <h1>Perpustakaan Efqai</h1>
    </header>

    <nav>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('buku.index') }}">Daftar Buku</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Perpustakaan Efqai. All rights reserved.</p>
    </footer>
 

</body>
</html>
