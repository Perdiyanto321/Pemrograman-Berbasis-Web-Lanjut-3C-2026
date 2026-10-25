@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<div class="page-title">
    <h2>Koleksi Buku</h2>
    <p>Temukan berbagai buku yang tersedia di perpustakaan kami.</p>
</div>

<div class="book-container">

    @foreach ($buku as $item)

        <x-buku-card
            :id="$item['id']"
            :judul="$item['judul']"
            :penulis="$item['penulis']"
            :tahun="$item['tahun']"
        >
            <span>{{ $item['kategori'] }}</span>
        </x-buku-card>

    @endforeach

</div>

@endsection