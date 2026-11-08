@extends('layouts.perpustakaan')

@section('title', 'Kelola Pengembalian')

@section('content')
<h2>Kelola Pengembalian</h2>

@if (session('status'))
    <div class="pesan pesan-sukses">{{ session('status') }}</div>
@endif

@error('status')
    <div class="pesan pesan-error">{{ $message }}</div>
@enderror

<table class="tabel-buku">
    <thead>
        <tr>
            <th>Anggota</th>
            <th>Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($peminjamans as $p)
            <tr>
                <td>{{ $p->anggota->nama }}</td>
                <td>{{ $p->buku->judul }}</td>
                <td>{{ $p->tanggal_pinjam }}</td>
                <td>
                    @can('mencatat pengembalian buku')
                        <form method="POST" action="{{ route('kelola.pengembalian.kembalikan', $p) }}">
                            @csrf
                            @method('PATCH')
                            <button type="submit">Catat Kembali</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Tidak ada buku yang sedang dipinjam.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection