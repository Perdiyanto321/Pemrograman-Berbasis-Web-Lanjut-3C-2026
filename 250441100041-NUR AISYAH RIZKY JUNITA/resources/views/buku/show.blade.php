@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

<div style="text-align: center;">

    <h2>Detail Buku</h2>

    @if ($buku)

        <div class="detail-card" style="text-align: center;">

            <h3>{{ $buku['judul'] }}</h3>

            <p>
                <strong>ID Buku:</strong>
                {{ $buku['id'] }}
            </p>

            <p>
                <strong>Penulis:</strong>
                {{ $buku['penulis'] }}
            </p>

            <p>
                <strong>Tahun Terbit:</strong>
                {{ $buku['tahun'] }}
            </p>

            <p>
                <strong>Kategori:</strong>
                {{ $buku['kategori'] }}
            </p>

            <a href="{{ route('buku.index') }}" class="btn">
                ← Kembali ke Daftar Buku
            </a>

        </div>

    @else

        <div class="not-found" style="text-align: center;">

            <h3>Buku Tidak Ditemukan</h3>

            <p>
                Data buku yang kamu cari tidak tersedia.
            </p>

            <a href="{{ route('buku.index') }}" class="btn">
                Kembali ke Daftar Buku
            </a>

        </div>

    @endif

</div>

@endsection