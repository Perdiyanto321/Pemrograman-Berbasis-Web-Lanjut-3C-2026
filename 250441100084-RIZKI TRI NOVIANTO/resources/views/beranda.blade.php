@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="hero">
        <h2>Selamat Datang di Perpustakaan Digital</h2>
        <p>Temukan koleksi buku favoritmu, mulai dari novel, sastra, teknologi, hingga pengembangan diri.</p>
        <a href="{{ route('buku.index') }}" class="btn btn-light">Jelajahi Koleksi Buku</a>
    </section>

    <section class="features">
        <div class="feature">
            <h3>Koleksi Lengkap</h3>
            <p>Beragam kategori buku yang bisa kamu lihat dalam satu halaman.</p>
        </div>
        <div class="feature">
            <h3>Detail Buku</h3>
            <p>Lihat informasi penulis, tahun terbit, dan kategori setiap buku.</p>
        </div>
        <div class="feature">
            <h3>Cepat &amp; Mudah</h3>
            <p>Navigasi sederhana agar kamu cepat menemukan buku yang dicari.</p>
        </div>
    </section>
@endsection
