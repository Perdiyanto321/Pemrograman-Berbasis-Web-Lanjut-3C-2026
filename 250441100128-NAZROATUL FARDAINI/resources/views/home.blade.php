@extends('layouts.main')

@section('content')
    <div class="home-hero">
        <span class="hero-badge">Sistem Perpustakaan Digital</span>
        <h2>Selamat Datang di Perpustakaan AQU</h2>
        <p>Jelajahi berbagai koleksi buku digital terlengkap untuk mendukung pembelajaran dan pengetahuan Anda secara praktis dan fleksibel.</p>
        <a href="{{ route('buku.index') }}" class="home-btn">Lihat Daftar Buku &raquo;</a>
    </div>
@endsection