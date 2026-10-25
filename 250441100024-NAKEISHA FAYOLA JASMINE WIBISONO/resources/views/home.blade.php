@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="hero">
        <h2>Selamat Datang di e-Pustaka</h2>
        <p>Temukan berbagai koleksi buku menarik yang tersedia di perpustakaan kami.</p>
        <a href="{{ route('buku.index') }}" class="btn btn-primary">Lihat Daftar Buku</a>
    </div>
@endsection
