@extends('layouts.app')

@section('title', $buku['judul'] ?? 'Buku Tidak Ditemukan')

@section('content')
    <a href="{{ route('buku.index') }}" class="back-link">&larr; Kembali ke Daftar Buku</a>

    @if ($buku)
        <div class="detail-buku">
            <h2>{{ $buku['judul'] }}</h2>
            <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
            <p><strong>Tahun Terbit:</strong> {{ $buku['tahun'] }}</p>
            <p><strong>Kategori:</strong> {{ $buku['kategori'] }}</p>
        </div>
    @else
        <div class="alert-notfound">
            <p>Maaf, buku dengan id tersebut tidak ditemukan.</p>
        </div>
    @endif
@endsection
