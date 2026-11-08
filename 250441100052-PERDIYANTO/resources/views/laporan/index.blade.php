@extends('layouts.perpustakaan')

@section('title', 'Laporan Perpustakaan')

@section('content')
<h2>Laporan Perpustakaan</h2>

<h3>Ringkasan Peminjaman (total: {{ $total }})</h3>
<table class="tabel-buku">
    <thead>
        <tr><th>Status</th><th>Jumlah</th></tr>
    </thead>
    <tbody>
        @foreach (['diajukan', 'dipinjam', 'dikembalikan', 'ditolak'] as $status)
            <tr>
                <td>{{ $status }}</td>
                <td>{{ $perStatus[$status] ?? 0 }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h3>Buku Paling Sering Dipinjam</h3>
<table class="tabel-buku">
    <thead>
        <tr><th>Judul</th><th>Jumlah Dipinjam</th></tr>
    </thead>
    <tbody>
        @forelse ($terpopuler as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->peminjamans_count }}</td>
            </tr>
        @empty
            <tr><td colspan="2">Belum ada data.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection