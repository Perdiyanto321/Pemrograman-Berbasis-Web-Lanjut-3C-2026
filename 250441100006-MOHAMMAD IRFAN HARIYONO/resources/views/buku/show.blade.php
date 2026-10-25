@extends('layouts.main')

@section('title', 'Detail Buku')

@section('content')
    @if ($buku)
        <div class="detail-container">
            <h2>Detail Buku</h2>
            <div class="detail-card">
                <table>
                    <tr>
                        <th>ID Buku</th>
                        <td>: {{ $buku['id'] }}</td>
                    </tr>
                    <tr>
                        <th>Judul Buku</th>
                        <td>: {{ $buku['judul'] }}</td>
                    </tr>
                    <tr>
                        <th>Penulis</th>
                        <td>: {{ $buku['penulis'] }}</td>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <td>: {{ $buku['tahun_terbit'] }}</td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>: <span class="badge">{{ $buku['kategori'] }}</span></td>
                    </tr>
                </table>
                <br>
                <a href="{{ route('buku.index') }}" class="btn btn-secondary">&laquo; Kembali ke Daftar Buku</a>
            </div>
        </div>
    @else
        <div class="alert alert-error">
            <h2>Buku Tidak Ditemukan</h2>
            <p>Maaf, buku dengan ID yang Anda cari tidak dapat ditemukan dalam sistem.</p>
            <br>
            <a href="{{ route('buku.index') }}" class="btn">&laquo; Kembali ke Daftar Buku</a>
        </div>
    @endif
@endsection