@extends('layouts.app')

@section('content')

<h2 class="judul"> Daftar Buku</h2>

<div class="book-container">

    @foreach ($buku as $item)

    <div class="book-card">

        <h2>{{ $item['judul'] }}</h2>

        <p><b>Penulis:</b> {{ $item['penulis'] }}</p>

        <p><b>Tahun:</b> {{ $item['tahun'] }}</p>

        <p><b>Kategori:</b> {{ $item['kategori'] }}</p>

        <a href="{{ route('buku.show', $item['id']) }}" class="button">
            Lihat Detail
        </a>

    </div>

    @endforeach

</div>

@endsection