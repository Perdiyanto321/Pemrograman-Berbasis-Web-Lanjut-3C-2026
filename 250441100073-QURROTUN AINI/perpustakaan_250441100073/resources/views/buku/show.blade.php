@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

    @if ($book)

        <h2>{{ $book['judul'] }}</h2>

        <p>
            <strong>Penulis:</strong>
            {{ $book['penulis'] }}
        </p>

        <p>
            <strong>Tahun Terbit:</strong>
            {{ $book['tahun'] }}
        </p>

        <p>
            <strong>Kategori:</strong>
            {{ $book['kategori'] }}
        </p>

        <br>

        <a href="{{ route('buku.index') }}">
            ← Kembali ke Daftar Buku
        </a>

    @else

        <h2>Buku Tidak Ditemukan</h2>

        <p>
            Maaf, data buku dengan ID tersebut tidak tersedia.
        </p>

        <a href="{{ route('buku.index') }}">
            ← Kembali ke Daftar Buku
        </a>

    @endif

@endsection