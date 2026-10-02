@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<div class="page-title">
    <h2>Daftar Buku </h2>
    <p>Berikut adalah koleksi buku yang tersedia di perpustakaan.</p>
</div>

<div class="book-grid">

    @foreach ($buku as $data)

        <x-kartu-buku
            :id="$data['id']"
            :judul="$data['judul']"
            :penulis="$data['penulis']"
            :tahun="$data['tahun']"
        >
            <p>
                <strong>Kategori:</strong>
                {{ $data['kategori'] }}
            </p>
        </x-kartu-buku>

    @endforeach

</div>

@endsection