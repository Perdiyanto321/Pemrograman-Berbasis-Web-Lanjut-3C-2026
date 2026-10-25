@extends('layouts.app')

@section('title', 'Daftar Buku - Perpustakaan Cendekia')

@section('content')
    <h2>Daftar Koleksi Buku</h2>

    <div class="grid-buku">
        @foreach ($buku as $item)
            <x-buku-card :buku="$item">
                <!-- Named Slot untuk kategori -->
                <x-slot:extraInfo>
                    Kategori: {{ $item['kategori'] }}
                </x-slot:extraInfo>

                <!-- Default Slot untuk tombol detail -->
                <a href="{{ route('buku.show', $item['id']) }}" class="btn">Detail Buku</a>
            </x-buku-card>
        @endforeach
    </div>
@endsection