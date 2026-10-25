<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Digital')</title>

    <!-- Menghubungkan CSS via Vite -->
    @vite(['resources/css/app.css'])
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Perpustakaan Cendekia</h1>
    </header>

    <!-- Navbar -->
    <nav>
        <a href="{{ route('home') }}">Beranda</a>
        <a href="{{ route('buku.index') }}">Daftar Buku</a>
    </nav>

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Perpustakaan Cendekia. All rights reserved.</p>
    </footer>

</body>

</html>