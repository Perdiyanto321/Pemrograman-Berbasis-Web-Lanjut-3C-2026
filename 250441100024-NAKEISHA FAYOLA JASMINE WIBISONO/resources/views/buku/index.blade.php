@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2 class="page-title">Daftar Buku</h2>

    <div class="grid-buku">
        @foreach ($daftarBuku as $buku)
            <x-kartu-buku
                :id="$buku['id']"
                :judul="$buku['judul']"
                :penulis="$buku['penulis']"
                :tahun="$buku['tahun']"
            >
                <x-slot:kategori>
                    {{ $buku['kategori'] }}
                </x-slot:kategori>
            </x-kartu-buku>
        @endforeach
    </div>
@endsection
