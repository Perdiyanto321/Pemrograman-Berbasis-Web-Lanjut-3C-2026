<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Nex-GRead')
    </title>

    @vite(['resources/css/app.css'])
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div>
                    <h1>Nex-GRead</h1>
                    <p>Temukan buku favoritmu</p>
                </div>
            </div>
        </div>
    </header>


    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">

                <a href="{{ route('home') }}" class="nav-brand">
                    Perpustakaan
                </a>

                <div class="nav-menu">
                    <a
                        href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'active' : '' }}"
                    >
                        Beranda
                    </a>

                    <a
                        href="{{ route('buku.index') }}"
                        class="{{ request()->routeIs('buku.*') ? 'active' : '' }}"
                    >
                        Daftar Buku
                    </a>
                </div>

            </div>
        </div>
    </nav>


    <!-- Konten -->
    <main class="main-content">
        <div class="container">

            @yield('content')

        </div>
    </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>
                &copy; {{ date('Y') }} Nex-GRead.
            </p>
        </div>
    </footer>

</body>
</html>