@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

    <h2>Daftar Buku</h2>

    <p>
        Berikut adalah koleksi buku yang tersedia di perpustakaan.
    </p>

    <div class="book-list">

        @foreach ($books as $book)

            <x-book-card :book="$book">

                <a href="{{ route('buku.show', $book['id']) }}">
                    Lihat Detail
                </a>

            </x-book-card>

        @endforeach

    </div>

@endsection