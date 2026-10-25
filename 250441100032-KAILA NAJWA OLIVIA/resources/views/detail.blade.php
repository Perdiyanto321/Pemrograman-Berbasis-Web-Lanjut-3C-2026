@extends('layouts.app')

@section('content')

@if ($detail)

<div class="detail-card">

    <h2> {{ $detail['judul'] }}</h2>

    <p><b>ID Buku:</b> {{ $detail['id'] }}</p>

    <p><b>Penulis:</b> {{ $detail['penulis'] }}</p>

    <p><b>Tahun Terbit:</b> {{ $detail['tahun'] }}</p>

    <p><b>Kategori:</b> {{ $detail['kategori'] }}</p>

    <a href="{{ route('buku.index') }}" class="button">
        ← Kembali
    </a>

</div>

@else

<div class="detail-card">

    <h2>Buku Tidak Ditemukan</h2>

    <a href="{{ route('buku.index') }}" class="button">
        ← Kembali
    </a>

</div>

@endif

@endsection