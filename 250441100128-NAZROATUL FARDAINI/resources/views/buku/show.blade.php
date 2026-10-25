@extends('layouts.main')

@section('content')
    @if($buku)
        <div class="detail-box">
            <h2>Detail Buku</h2>
            <hr>
            <div class="detail-content">
                <img src="{{ asset($buku['gambar']) }}" alt="{{ $buku['judul'] }}" class="detail-cover-img">
                
                <div class="detail-info">
                    <p><strong>ID Buku:</strong> {{ $buku['id'] }}</p>
                    <p><strong>Judul Buku:</strong> {{ $buku['judul'] }}</p>
                    <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
                    <p><strong>Tahun Terbit:</strong> {{ $buku['tahun_terbit'] }}</p>
                    <p><strong>Kategori:</strong> {{ $buku['kategori'] }}</p>
                </div>
            </div>

            <br>
            <a href="{{ route('buku.index') }}" class="btn-back">&laquo; Kembali ke Daftar Buku</a>
        </div>
    @else
        <div class="alert alert-error">
            <h2>Data Buku Tidak Ditemukan!</h2>
            <p>Maaf, buku dengan ID yang Anda cari tidak tersedia dalam sistem.</p>
            <br>
            <a href="{{ route('buku.index') }}" class="btn-back">&laquo; Kembali ke Daftar Buku</a>
        </div>
    @endif
@endsection