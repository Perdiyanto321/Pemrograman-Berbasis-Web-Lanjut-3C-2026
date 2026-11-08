@extends('layouts.perpustakaan')

@section('title', 'Kelola Peminjaman')

@section('content')
<h2>Kelola Peminjaman</h2>

@if (session('status'))
    <div class="pesan pesan-sukses">{{ session('status') }}</div>
@endif

@error('status')
    <div class="pesan pesan-error">{{ $message }}</div>
@enderror

<table class="tabel-buku">
    <thead>
        <tr><th>Anggota</th><th>Buku</th><th>Tanggal</th><th>Status</th><th>Aksi</th></tr>
    </thead>
    <tbody>
        @forelse ($peminjamans as $p)
            <tr>
                <td>{{ $p->anggota->nama }}</td>
                <td>{{ $p->buku->judul }}</td>
                <td>{{ $p->tanggal_pinjam }}</td>
                <td>{{ $p->status }}</td>
                <td>
                    @if ($p->status === 'diajukan')
                        @can('memproses persetujuan peminjaman')
                            <form method="POST" action="{{ route('kelola.peminjaman.setujui', $p) }}" style="display:inline">
                                @csrf @method('PATCH')
                                <button type="submit">Setujui</button>
                            </form>
                            <form method="POST" action="{{ route('kelola.peminjaman.tolak', $p) }}" style="display:inline">
                                @csrf @method('PATCH')
                                <button type="submit">Tolak</button>
                            </form>
                        @endcan
                    @else
                        -
                    @endif
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada data peminjaman.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection