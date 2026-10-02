@extends('layouts.app')

@section('title', 'Beranda - Nex-GRead')

@section('content')

<section class="hero">
    <div class="hero-content">

        <span class="hero-icon">📚</span>

        <h2>Selamat Datang di Nex-GRead.</h2>

        <p>
            Temukan berbagai koleksi buku menarik untuk menambah
            wawasan dan pengetahuanmu.
        </p>

        <a href="{{ route('buku.index') }}" class="btn btn-primary">
            Lihat Daftar Buku
        </a>

    </div>
</section>


<section class="info-section">

    <div class="section-heading">
        <h2>Kenapa Membaca Buku?</h2>
        <p>
            Membaca adalah salah satu cara terbaik untuk memperluas
            wawasan dan pengetahuan.
        </p>
    </div>


    <div class="info-grid">

        <div class="info-card">
            <div class="info-icon">📖</div>
            <h3>Tambah Wawasan</h3>
            <p>
                Buku memberikan berbagai informasi dan pengetahuan
                baru yang bermanfaat.
            </p>
        </div>

        <div class="info-card">
            <div class="info-icon">🧠</div>
            <h3>Melatih Pikiran</h3>
            <p>
                Membaca membantu meningkatkan kemampuan berpikir
                dan memahami berbagai sudut pandang.
            </p>
        </div>

        <div class="info-card">
            <div class="info-icon">✨</div>
            <h3>Menambah Inspirasi</h3>
            <p>
                Berbagai cerita dan informasi dari buku dapat
                memberikan inspirasi baru.
            </p>
        </div>

    </div>

</section>

@endsection