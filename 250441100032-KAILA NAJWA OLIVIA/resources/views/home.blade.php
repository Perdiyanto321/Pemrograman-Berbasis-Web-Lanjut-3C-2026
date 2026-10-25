@extends('layouts.app')

@section('content')

<div class="hero">

    <h2>Selamat Datang di Perpustakaan Kita 📚</h2>

    <p>
        Temukan berbagai macam buku menarik untuk dibaca.
    </p>

    <a href="{{ route('buku.index') }}" class="button">
        Lihat Daftar Buku
    </a>

</div>

@endsection