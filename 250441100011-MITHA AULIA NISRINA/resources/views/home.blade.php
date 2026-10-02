@extends('layouts.app')

@section('title', 'Home - KATAMITHA')

@section('content')

    <section class="home-hero">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <span class="hero-label">
                PERPUSTAKAAN DIGITAL
            </span>

            <h2>
                Temukan Cerita,
                <span>Perluas Wawasan.</span>
            </h2>

            <p class="hero-description">
                KATAMITHA merupakan ruang baca digital yang menghadirkan
                berbagai koleksi buku dari beragam kategori. Temukan bacaan
                yang sesuai dengan minatmu dan biarkan setiap halaman
                membuka wawasan baru, memperluas sudut pandang, serta
                menemani perjalanan membaca dengan cerita dan pengetahuan
                yang bermakna.
            </p>

            <a href="{{ route('buku.index') }}" class="hero-button">
                Jelajahi Koleksi
                <span>→</span>
            </a>

        </div>

        <div class="hero-caption">
            <span>KATAMITHA</span>
            <small>Tempat Kata Menjadi Cerita</small>
        </div>

    </section>

    <section class="collection-section">

        <div class="section-heading">

            <span>
                KOLEKSI KATAMITHA
            </span>

            <h2>
                Eksplorasi Koleksi Bacaan
            </h2>

            <p>
                Temukan berbagai bacaan berdasarkan kategori yang tersedia
                dan pilih cerita yang ingin kamu jelajahi. Setiap kategori
                menghadirkan koleksi dengan tema yang berbeda sehingga
                pembaca dapat menemukan bacaan yang sesuai dengan minat,
                kebutuhan, dan rasa ingin tahu.
            </p>

        </div>

        <div class="category-intro">

            <span>
                PILIH KATEGORI
            </span>

            <p>
                Jelajahi koleksi berdasarkan tema yang ingin kamu baca.
            </p>

        </div>


        <div class="category-grid">

            <a href="{{ route('buku.index', ['category' => 'Sastra & Fiksi']) }}" class="category-card">

                <span class="category-number">
                    01
                </span>

                <div class="category-card-content">

                    <span class="category-small-label">
                        SASTRA
                    </span>

                    <h3>
                        Sastra & Fiksi
                    </h3>

                    <p>
                        Kisah, novel, dan karya sastra yang menghadirkan
                        beragam cerita serta perspektif kehidupan melalui
                        tokoh, peristiwa, dan pengalaman yang dapat membawa
                        pembaca mengenal berbagai sudut pandang.
                    </p>

                </div>

                <span class="category-arrow">
                    →
                </span>

            </a>

            <a href="{{ route('buku.index', ['category' => 'Pengembangan Diri']) }}" class="category-card">

                <span class="category-number">
                    02
                </span>

                <div class="category-card-content">

                    <span class="category-small-label">
                        PENGEMBANGAN
                    </span>

                    <h3>
                        Pengembangan Diri
                    </h3>

                    <p>
                        Bacaan yang dapat membuka sudut pandang baru
                        dan membantu memahami perjalanan diri, membangun
                        pola pikir yang lebih baik, serta menemukan
                        berbagai gagasan untuk menghadapi kehidupan.
                    </p>

                </div>

                <span class="category-arrow">
                    →
                </span>

            </a>

            <a href="{{ route('buku.index', ['category' => 'Sejarah & Sosial']) }}" class="category-card">

                <span class="category-number">
                    03
                </span>

                <div class="category-card-content">

                    <span class="category-small-label">
                        SEJARAH
                    </span>

                    <h3>
                        Sejarah & Sosial
                    </h3>

                    <p>
                        Koleksi tentang sejarah, tokoh, serta berbagai
                        peristiwa dan kehidupan sosial yang membantu
                        pembaca mengenal perjalanan masa lalu sekaligus
                        memahami perubahan yang terjadi di masyarakat.
                    </p>

                </div>

                <span class="category-arrow">
                    →
                </span>

            </a>

            <a href="{{ route('buku.index', ['category' => 'Pendidikan']) }}" class="category-card">

                <span class="category-number">
                    04
                </span>

                <div class="category-card-content">

                    <span class="category-small-label">
                        PENDIDIKAN
                    </span>

                    <h3>
                        Pendidikan
                    </h3>

                    <p>
                        Bacaan yang berkaitan dengan pembelajaran,
                        pendidikan, dan pengembangan pengetahuan yang
                        dapat memberikan wawasan baru serta mendukung
                        proses belajar melalui berbagai perspektif.
                    </p>

                </div>

                <span class="category-arrow">
                    →
                </span>

            </a>

            <a href="{{ route('buku.index', ['category' => 'Teknologi & Digital']) }}" class="category-card">

                <span class="category-number">
                    05
                </span>

                <div class="category-card-content">

                    <span class="category-small-label">
                        TEKNOLOGI
                    </span>

                    <h3>
                        Teknologi & Digital
                    </h3>

                    <p>
                        Koleksi mengenai teknologi, transformasi digital,
                        dan perkembangan dunia masa kini yang membantu
                        pembaca memahami perubahan teknologi serta
                        pengaruhnya terhadap kehidupan dan masyarakat.
                    </p>

                </div>

                <span class="category-arrow">
                    →
                </span>

            </a>

            <a href="{{ route('buku.index', ['category' => 'Sains & Pengetahuan']) }}" class="category-card">

                <span class="category-number">
                    06
                </span>

                <div class="category-card-content">

                    <span class="category-small-label">
                        SAINS
                    </span>

                    <h3>
                        Sains & Pengetahuan
                    </h3>

                    <p>
                        Koleksi yang membahas ilmu pengetahuan, alam,
                        dan berbagai gagasan ilmiah yang dapat membantu
                        pembaca memahami dunia melalui pengetahuan serta
                        sudut pandang yang lebih luas.
                    </p>

                </div>

                <span class="category-arrow">
                    →
                </span>

            </a>

        </div>

    </section>

    <section class="home-reading">

        <div class="reading-overlay"></div>

        <div class="reading-content">

            <span class="hero-label">
                RUANG UNTUK MEMBACA
            </span>

            <h2>
                Setiap Halaman
                Menyimpan Sesuatu.
            </h2>

            <p>
                Temukan buku yang menarik, baca dengan nyaman,
                dan biarkan setiap kata membuka kemungkinan baru.
                Jadikan setiap halaman sebagai ruang untuk memperoleh
                pengetahuan, menemukan inspirasi, dan melihat berbagai
                hal dari sudut pandang yang berbeda.
            </p>

            <a href="{{ route('buku.index') }}" class="hero-button">
                Lihat Semua Buku
                <span>→</span>
            </a>

        </div>

    </section>

@endsection