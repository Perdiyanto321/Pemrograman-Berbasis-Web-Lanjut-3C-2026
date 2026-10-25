@extends('layouts.app')

@section('title', 'Daftar Buku - Perpustakaan Efqai')

@section('content')
    <h2>Daftar Buku Perpustakaan</h2>

    <div class="card-grid">
        @foreach ($bukuList as $buku)
            <x-buku-card :buku="$buku">
                <x-slot:extra>
                    <span class="badge">Kategori: {{ $buku['kategori'] }}</span>
                </x-slot:extra>
            </x-buku-card>
        @endforeach
    </div>
@endsection
