@extends('layouts.app')

@section('konten')
<div class="halaman-utama" style="background-image: url('{{ asset('images/bg-perpus.jpg') }}');">
    <h2>JELAJAHI DUNIA LEWAT JENDELA LITERASI</h2>
    <p>Jelajahi koleksi buku favorit mu dengan mudah dan cepat melalui platform ini.</p>
    <a href="{{ route('buku.index') }}" class="btn-halaman-utama">Lihat Katalog Buku</a>
</div>
@endsection