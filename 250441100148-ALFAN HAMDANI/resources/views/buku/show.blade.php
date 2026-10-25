@extends('layouts.app')

@section('title', $buku ? $buku['judul'] : 'Buku Tidak Ditemukan')

@section('content')
    @if ($buku)
        <div class="detail-card">
            <h2>{{ $buku['judul'] }}</h2>
            <hr style="border: 0; border-top: 1px solid #eee; margin: 1rem 0;">
            <p><strong>ID Buku:</strong> {{ $buku['id'] }}</p>
            <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
            <p><strong>Tahun Terbit:</strong> {{ $buku['tahun_terbit'] }}</p>
            <p><strong>Kategori:</strong> {{ $buku['kategori'] }}</p>

            <a href="{{ route('buku.index') }}" class="btn" style="background-color: #7f8c8d;">&laquo; Kembali ke Daftar
                Buku</a>
        </div>
    @else
        <div class="detail-card" style="text-align: center;">
            <h2>Buku Tidak Ditemukan!</h2>
            <p>Maaf, data buku dengan ID tersebut tidak ada dalam sistem kami.</p>
            <a href="{{ route('buku.index') }}" class="btn">Kembali ke Daftar Buku</a>
        </div>
    @endif
@endsection