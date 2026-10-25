@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

    <h2>Daftar Buku</h2>

    <p>
        Berikut adalah koleksi buku yang tersedia di perpustakaan.
    </p>

    @foreach ($books as $book)

        <div>
            <h3>{{ $book['judul'] }}</h3>

            <p>
                Penulis: {{ $book['penulis'] }}
            </p>

            <p>
                Tahun Terbit: {{ $book['tahun'] }}
            </p>

            <p>
                Kategori: {{ $book['kategori'] }}
            </p>

            <a href="{{ route('buku.show', $book['id']) }}">
                Lihat Detail
            </a>
        </div>

        <hr>

    @endforeach

@endsection