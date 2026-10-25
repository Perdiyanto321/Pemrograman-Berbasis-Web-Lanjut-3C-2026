@extends('layouts.app')

@section('title', isset($buku) ? $buku['judul'] : 'Buku Tidak Ditemukan')

@section('content')
    @if ($buku)
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <h2>{{ $buku['judul'] }}</h2>
            <hr style="margin: 15px 0;">
            <p><strong>ID Buku:</strong> {{ $buku['id'] }}</p>
            <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
            <p><strong>Tahun Terbit:</strong> {{ $buku['tahun_terbit'] }}</p>
            <p><strong>Kategori:</strong> <span class="badge">{{ $buku['kategori'] }}</span></p>
            
            <a href="{{ route('buku.index') }}" class="btn" style="background-color: #64748b; margin-top: 20px;">
                &larr; Kembali ke Daftar Buku
            </a>
        </div>
    @else
        <div class="alert">
            <h3>Data Buku Tidak Ditemukan!</h3>
            <p>Buku dengan ID yang Anda cari tidak tersedia dalam sistem perpustakaan.</p>
            <a href="{{ route('buku.index') }}" class="btn" style="margin-top: 15px;">Kembali ke Daftar Buku</a>
        </div>
    @endif
@endsection
