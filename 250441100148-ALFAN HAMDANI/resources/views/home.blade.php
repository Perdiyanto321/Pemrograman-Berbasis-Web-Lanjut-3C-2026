@extends('layouts.app')

@section('title', 'Beranda - Perpustakaan Cendekia')

@section('content')
    <div class="detail-card">
        <h2>Selamat Datang di Perpustakaan Cendekia</h2>
        <p>Temukan berbagai koleksi buku menarik untuk menambah wawasan Anda.</p>
        <a href="{{ route('buku.index') }}" class="btn">Lihat Daftar Buku</a>
    </div>
@endsection