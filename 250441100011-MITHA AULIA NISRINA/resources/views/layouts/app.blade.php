<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'KATAMITHA')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <header class="site-header">

        <div class="header-content">

            <a href="{{ route('home') }}" class="brand">

                <div class="brand-text">

                    <span class="brand-label">
                        DIGITAL LIBRARY
                    </span>

                    <h1>
                        KATAMITHA
                    </h1>

                    <p>
                        Tempat Kata Menjadi Cerita
                    </p>

                </div>

            </a>

        </div>

    </header>

    <nav class="navbar">

        <div class="nav-content">

            <div class="nav-title">

                <div>
                    <small>KATAMITHA</small>
                    <strong>Perpustakaan Digital</strong>
                </div>

            </div>

            <div class="nav-links">

                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Beranda
                </a>

                <a href="{{ route('buku.index') }}" class="{{ request()->routeIs('buku.index') ? 'active' : '' }}">
                    Daftar Buku
                </a>

            </div>

        </div>

    </nav>

    <main class="main-content">

        @yield('content')

    </main>

    <footer class="site-footer">

        <div class="footer-content">

            <div class="footer-brand">

                <a href="{{ route('home') }}" class="footer-logo">
                    KATAMITHA
                </a>

                <p class="footer-tagline">
                    Tempat Kata Menjadi Cerita
                </p>

                <p class="footer-description">
                    KATAMITHA merupakan perpustakaan digital yang
                    menghadirkan berbagai koleksi bacaan untuk memperluas
                    wawasan, menemukan perspektif baru, dan menemani
                    perjalanan membaca.
                </p>

            </div>

            <div class="footer-column">

                <h4>
                    KOLEKSI
                </h4>

                <a href="{{ route('buku.index', ['category' => 'Sastra & Fiksi']) }}">
                    Sastra & Fiksi
                </a>

                <a href="{{ route('buku.index', ['category' => 'Pengembangan Diri']) }}">
                    Pengembangan Diri
                </a>

                <a href="{{ route('buku.index', ['category' => 'Sejarah & Sosial']) }}">
                    Sejarah & Sosial
                </a>

                <a href="{{ route('buku.index', ['category' => 'Pendidikan']) }}">
                    Pendidikan
                </a>

                <a href="{{ route('buku.index', ['category' => 'Teknologi & Digital']) }}">
                    Teknologi & Digital
                </a>

                <a href="{{ route('buku.index', ['category' => 'Sains & Pengetahuan']) }}">
                    Sains & Pengetahuan
                </a>

            </div>

            <div class="footer-column">

                <h4>
                    NAVIGASI
                </h4>

                <a href="{{ route('home') }}">
                    Beranda
                </a>

                <a href="{{ route('buku.index') }}">
                    Daftar Buku
                </a>

            </div>

            <div class="footer-column">

                <h4>
                    TENTANG KATAMITHA
                </h4>

                <span>
                    Perpustakaan Digital
                </span>

                <span>
                    Koleksi Bacaan
                </span>

                <span>
                    Ruang Membaca
                </span>

            </div>

        </div>

        <div class="footer-quote">

            <span class="quote-line"></span>

            <p>
                “Setiap halaman menyimpan pengetahuan.
                Setiap kata membuka kemungkinan baru.”
            </p>

            <span class="quote-line"></span>

        </div>

        <div class="footer-bottom">

            <p>
                © 2026 KATAMITHA · Perpustakaan Digital
            </p>

            <span>
                Membaca · Menemukan · Berkembang
            </span>

        </div>

    </footer>

</body>

</html>