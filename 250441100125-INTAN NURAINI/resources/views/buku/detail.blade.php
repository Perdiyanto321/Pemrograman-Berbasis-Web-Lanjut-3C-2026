@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')

@if ($buku)

    <div class="detail-card">

        <div>
            <h2>{{ $buku['judul'] }}</h2>

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
                Kembali ke Daftar Buku
            </a>
        </div>

    </div>

@else

    <div class="not-found">

        <h2>Buku Tidak Ditemukan</h2>

        <p>
            Maaf, data buku yang kamu cari tidak tersedia.
        </p>

        <a href="{{ route('buku.index') }}" class="btn">
            Kembali ke Daftar Buku
        </a>

    </div>

@endif

@endsection