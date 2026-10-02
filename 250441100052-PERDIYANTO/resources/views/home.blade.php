@extends('layouts.app')

@section('title','Halaman Home')

@section('content')
<div class="home">
    <img src="{{ asset('image/images.jpg') }}" alt="Deskripsi gambar">
    <p>Perpustakaan Perdi hadir sebagai ruang baca digital yang menyediakan koleksi buku dari berbagai kategori, <span>mulai dari pemrograman, sains, hingga sastra.</span> Jelajahi katalog kami dan temukan bacaan yang sesuai dengan minatmu.</p>
</div>
@endsection