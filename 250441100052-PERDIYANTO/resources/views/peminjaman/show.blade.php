@extends('layouts.perpustakaan')

@section('title', 'Detail Peminjaman')

@section('content')
<h2>Detail Peminjaman</h2>

<table class="tabel-buku">
    <tbody>
        <tr>
            <th>Buku</th>
            <td>{{ $peminjaman->buku->judul }}</td>
        </tr>
        <tr>
            <th>Peminjam</th>
            <td>{{ $peminjaman->anggota->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Pinjam</th>
            <td>{{ $peminjaman->tanggal_pinjam }}</td>
        </tr>
        <tr>
            <th>Tanggal Kembali</th>
            <td>{{ $peminjaman->tanggal_kembali ?? '-' }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $peminjaman->status }}</td>
        </tr>
    </tbody>
</table>

<p>
    @can('kelola peminjaman')
        <a href="{{ route('kelola.peminjaman') }}">Kembali ke Kelola Peminjaman</a>
    @else
        <a href="{{ route('peminjaman.index') }}">Kembali ke Peminjaman Saya</a>
    @endcan
</p>
@endsection