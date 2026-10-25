@extends('layouts.app')

@section('konten')
<div class="container bagian-detail">
    @if ($buku)
        <a href="{{ route('buku.index') }}" class="btn-kembali">Kembali ke Daftar Buku</a>

        <div class="kartu-detail ">
           
            <img src="{{ $buku['cover'] }}">
            <div>
                <h2>{{ $buku['judul'] }}</h2>
                <p>Oleh {{ $buku['penulis'] }} • {{ $buku['tahun_terbit'] }}</p>

                <table class="table-detail">
                    <tr>
                        <th>ID Buku</th>
                        <td>: {{ $buku['id'] }}</td>
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
                        <td>: {{ $buku['kategori'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @else
        <div class="peringatan">
            <h2>Data Buku Tidak Ditemukan!</h2>
            <p>Buku dengan ID yang dicari tidak terdaftar dalam koleksi kami.</p>
            <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali ke Daftar Buku</a>
        </div>
    @endif
</div>
@endsection