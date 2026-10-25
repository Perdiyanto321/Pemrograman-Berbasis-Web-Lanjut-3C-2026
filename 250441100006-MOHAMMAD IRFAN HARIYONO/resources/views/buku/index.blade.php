@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Koleksi Buku</h2>
    
    <div class="buku-grid">
        @foreach ($bukuList as $buku)
            <x-buku-card :buku="$buku">
                {{-- Soal 11 Mengisi Slot--}}
                <span class="badge">{{ $buku['kategori'] }}</span>
            </x-buku-card>
        @endforeach
    </div>
@endsection