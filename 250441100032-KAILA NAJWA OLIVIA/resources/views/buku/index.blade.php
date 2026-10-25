@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2 class="page-title">Daftar Buku</h2>

    <div class="grid">
        @foreach ($buku as $b)
            <x-kartu-buku
                :judul="$b['judul']"
                :penulis="$b['penulis']"
                :tahun="$b['tahun']"
                :url="route('buku.show', $b['id'])"
            >
                {{ $b['kategori'] }}
            </x-kartu-buku>
        @endforeach
    </div>
@endsection

