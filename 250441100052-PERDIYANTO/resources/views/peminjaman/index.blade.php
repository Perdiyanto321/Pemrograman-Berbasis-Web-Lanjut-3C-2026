@extends('layouts.perpustakaan')

@section('title', 'Peminjaman Saya')

@section('content')
<h2>Riwayat Peminjaman Saya</h2>

@if (session('status'))
    <div class="pesan pesan-sukses">{{ session('status') }}</div>
@endif

<table class="tabel-buku">
    <thead>
        <tr><th>Buku</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Status</th><th>Aksi</th></tr>
    </thead>
    <tbody>
        @forelse ($peminjamans as $p)
            <tr>
                <td>{{ $p->buku->judul }}</td>
                <td>{{ $p->tanggal_pinjam }}</td>
                <td>{{ $p->tanggal_kembali ?? '-' }}</td>
                <td>{{ $p->status }}</td>
                <td><a href="{{ route('peminjaman.show', $p) }}">Detail</a></td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada peminjaman.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection