@extends('layouts.main')

@section('title', 'Beranda - Perpustakaan Digital')

@section('content')
    <div class="welcome-banner">
        <h2>Selamat Datang di Perpustakaan Digital!</h2>
        <p>Jelajahi koleksi buku terlengkap kami untuk menunjang kebutuhan referensi dan belajar Anda.</p>
        <a href="{{ route('buku.index') }}" class="btn btn-primary">Lihat Koleksi Buku</a>
    </div>
@endsection