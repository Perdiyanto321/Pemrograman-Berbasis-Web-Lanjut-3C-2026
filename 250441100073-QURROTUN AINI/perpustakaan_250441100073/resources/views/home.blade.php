@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    <section class="hero">
        <h2>Selamat Datang di Perpustakaan</h2>

        <p>
            Selamat datang di aplikasi perpustakaan
            250441100073.
        </p>

        <p>
            Temukan berbagai koleksi buku dan lihat
            informasi detail dari setiap buku.
        </p>

        <a href="{{ route('buku.index') }}">
            Lihat Daftar Buku
        </a>
    </section>

@endsection