@extends('layouts.app')

@section('judul', $buku ? $buku['judul'] : 'Buku Tidak Ditemukan')

@section('konten')
    @if ($buku)
        <article class="detail-buku">
            <p class="detail-buku__rak">Rak {{ $buku['kategori'] }}</p>
            <h2>{{ $buku['judul'] }}</h2>

            <dl class="detail-buku__meta">
                <div>
                    <dt>Penulis</dt>
                    <dd>{{ $buku['penulis'] }}</dd>
                </div>
                <div>
                    <dt>Tahun terbit</dt>
                    <dd>{{ $buku['tahun_terbit'] }}</dd>
                </div>
            </dl>

            @isset($buku['tautan_baca'])
                <a href="{{ $buku['tautan_baca'] }}" class="tombol" target="_blank" rel="noopener">
                    Baca buku ini
                </a>
            @endisset
        </article>
    @else
        <article class="detail-buku detail-buku--kosong">
            <h2>Buku tidak ditemukan</h2>
            <p>Data buku dengan ID tersebut belum ada di katalog kami.</p>
        </article>
    @endif

    <a href="{{ route('buku.index') }}" class="tautan-kembali">&larr; Kembali ke daftar buku</a>
@endsection
