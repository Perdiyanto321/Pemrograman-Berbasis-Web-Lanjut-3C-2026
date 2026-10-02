@extends('layouts.app')

@section('title', 'Daftar Buku - Nex-Gread')

@section('content')

<div class="page-header">

    <div>
        <span class="page-label">KOLEKSI</span>

        <h2>Daftar Buku</h2>

        <p>
            Jelajahi seluruh koleksi buku yang tersedia
            di perpustakaan.
        </p>
    </div>

</div>


@if(count($buku) > 0)

    <div class="book-grid">

        @foreach($buku as $item)

            <x-book-card :buku="$item">

                <span class="slot-text">
                    📚 Tersedia di Perpustakaan
                </span>

            </x-book-card>

        @endforeach

    </div>

@else

    <div class="empty-state">
        <div class="empty-icon">📚</div>

        <h3>Belum Ada Buku</h3>

        <p>
            Saat ini belum ada data buku yang tersedia.
        </p>
    </div>

@endif

@endsection