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
        <tr><td colspan="5">Memuat data...</td></tr>
    </tbody>
</table>

<div class="paginasi">
    <button type="button" id="btn-prev">&laquo; Sebelumnya</button>
    <span id="info-halaman"></span>
    <button type="button" id="btn-next">Berikutnya &raquo;</button>
</div>
@endsection

@push('scripts')
    <script>const BISA_KELOLA = false;</script>
    <script src="{{ asset('js/buku-client.js') }}"></script>
@endpush