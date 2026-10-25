@extends('layouts.app')

@section('title', $buku ? $buku['judul'] : 'Buku Tidak Ditemukan')

@section('content')
    @if ($buku)
        <div class="page-heading">
            <h2>Detail Buku</h2>
        </div>

        <article class="detail-card">
            <div class="detail-cover">{{ strtoupper(substr($buku['judul'], 0, 1)) }}</div>
            <div class="detail-info">
                <span class="badge">{{ $buku['kategori'] }}</span>
                <h3>{{ $buku['judul'] }}</h3>

                <dl class="detail-list">
                    <dt>ID Buku</dt>
                    <dd>{{ $buku['id'] }}</dd>
                    <dt>Judul</dt>
                    <dd>{{ $buku['judul'] }}</dd>
                    <dt>Penulis</dt>
                    <dd>{{ $buku['penulis'] }}</dd>
                    <dt>Tahun Terbit</dt>
                    <dd>{{ $buku['tahun_terbit'] }}</dd>
                    <dt>Kategori</dt>
                    <dd>{{ $buku['kategori'] }}</dd>
                </dl>

                <a href="{{ route('buku.index') }}" class="btn btn-primary">&larr; Kembali ke Daftar Buku</a>
            </div>
        </article>
    @else
        <div class="empty-state">
            <h2>Buku Tidak Ditemukan</h2>
            <p>Buku dengan ID <strong>{{ $id }}</strong> tidak ada dalam koleksi kami.</p>
            <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali ke Daftar Buku</a>
        </div>
    @endif
@endsection
