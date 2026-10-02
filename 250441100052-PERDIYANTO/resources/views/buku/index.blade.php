@extends('layouts.app')

@section('title','Daftar Buku')

@section('content')
<h2>Semua Buku</h2>

    <div class="daftar-buku">
        @foreach ($buku as $b)
            <x-kartu-buku :judul="$b['judul']" :penulis="$b['penulis']" :tahun="$b['tahun_terbit']" :id="$b['id']">
                <x-slot:kategori>{{ $b['kategori'] }}</x-slot:kategori>
            </x-kartu-buku>
        @endforeach
    </div>

@endsection