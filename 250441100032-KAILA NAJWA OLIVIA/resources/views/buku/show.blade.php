@extends('layouts.app')

@section('title', $buku ? $buku['judul'] : 'Buku Tidak Ditemukan')

@section('content')
    @if ($buku)
        <h2 class="judul-halaman">Detail Buku</h2>

        <div class="detail-buku">
            <span class="badge">{{ $buku['kategori'] }}</span>
            <h3>{{ $buku['judul'] }}</h3>
            <table>
                <tr><th>ID Buku</th><td>{{ $buku['id'] }}</td></tr>
                <tr><th>Judul</th><td>{{ $buku['judul'] }}</td></tr>
                <tr><th>Penulis</th><td>{{ $buku['penulis'] }}</td></tr>
                <tr><th>Tahun Terbit</th><td>{{ $buku['tahun_terbit'] }}</td></tr>
                <tr><th>Kategori</th><td>{{ $buku['kategori'] }}</td></tr>
            </table>
            <a href="{{ route('buku.index') }}" class="tombol">&larr; Kembali ke Daftar Buku</a>
        </div>
    @else
        <div class="tidak-ditemukan">
            <h2>Buku Tidak Ditemukan</h2>
            <p>Maaf, buku yang kamu cari tidak tersedia.</p>
            <a href="{{ route('buku.index') }}" class="tombol">&larr; Kembali ke Daftar Buku</a>
        </div>
    @endif
@endsection