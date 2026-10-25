@extends('layouts.app')
@section('judul', 'Beranda - Perpustakaan')
@section('content')
<div class="bg-pink-50 border border-pink-100 rounded-xl p-8 text-center">
    <h2 class="text-3xl font-extrabold text-pink-900 mb-4">Selamat Datang di Perpustakaan Digital</h2>
    <p class="text-gray-600 max-w-xl mx-auto mb-6">
        Temukan berbagai koleksi buku menarik mulai dari pemrograman, sistem operasi, hingga basis data dengan mudah dan cepat.
    </p>
    <a href="{{ route('buku.index') }}" class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition">
        Jelajahi Daftar Buku
    </a>
</div>
@endsection