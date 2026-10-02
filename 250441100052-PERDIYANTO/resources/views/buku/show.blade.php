@extends('layouts.app')

@section('title','Detail Buku')

@section('content')
@if ($buku !== null)
    <div class="detail-buku">
        <h3>{{ $buku['judul'] }}</h3>
        <p>Penulis: {{ $buku['penulis']}}</p>
        <p>Tahun Terbit: {{ $buku['tahun_terbit']}}</p>
        <p>Kategori: {{ $buku['kategori']}}</p>
        <p><a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a></p>
    </div>  
@else
    <div class="detail-buku">
        <p>Buku tidak ditemukan.</p>
        <p><a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a></p>
    </div>
@endif

@endsection
