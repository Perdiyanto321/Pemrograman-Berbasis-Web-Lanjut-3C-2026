@extends('layouts.perpustakaan')

@section('title', 'Daftar Buku')

@section('content')
<div id="alert-area"></div>

<table class="tabel-buku">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>

    <tbody id="tbody-buku">
        @forelse ($bukus as $index => $buku)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $buku->kategori->nama }}</td>
 
                <td><a href="/buku/{{ $buku->id }}">{{ $buku->judul }}</a></td>

                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data buku.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="paginasi">
    <button type="button" id="btn-prev" disabled>
        &laquo; Sebelumnya
    </button>

    <span id="info-halaman">
        Halaman 1
    </span>

    <button type="button" id="btn-next" disabled>
        Berikutnya &raquo;
    </button>
</div>
@endsection

@push('scripts')
    <script>const BISA_KELOLA = false;</script>
@endpush