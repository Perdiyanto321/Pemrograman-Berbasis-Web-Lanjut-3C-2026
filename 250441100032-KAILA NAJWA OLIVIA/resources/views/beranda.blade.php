@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="hero">
        <h2>Selamat Datang di Perpustakaan Digital</h2>
        <p>Jelajahi koleksi buku kami, mulai dari novel, sejarah, hingga teknologi.</p>
        <a href="{{ route('buku.index') }}" class="btn">Lihat Daftar Buku</a>
    </div>
@endsection