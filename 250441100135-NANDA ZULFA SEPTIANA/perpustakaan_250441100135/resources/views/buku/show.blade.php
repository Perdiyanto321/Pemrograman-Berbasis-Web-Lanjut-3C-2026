@extends('layouts.app')

@section('title', 'Detail Buku - Nex-GRead')

@section('content')

@if($detailBuku)

    <div class="detail-page">

        <a
            href="{{ route('buku.index') }}"
            class="back-link"
        >
            ← Kembali ke Daftar Buku
        </a>


        <div class="detail-card">

            <div class="detail-cover">
                <img
                    src="{{ asset('images/buku/' . $detailBuku['foto']) }}"
                    alt="{{ $detailBuku['judul'] }}"
                >
            </div>


            <div class="detail-content">

                <span class="book-category">
                    {{ $detailBuku['kategori'] }}
                </span>

                <h2>
                    {{ $detailBuku['judul'] }}
                </h2>

                <div class="detail-information">

                    <div class="detail-item">
                        <span class="detail-label">
                            ID Buku
                        </span>

                        <span class="detail-value">
                            {{ $detailBuku['id'] }}
                        </span>
                    </div>


                    <div class="detail-item">
                        <span class="detail-label">
                            Judul Buku
                        </span>

                        <span class="detail-value">
                            {{ $detailBuku['judul'] }}
                        </span>
                    </div>


                    <div class="detail-item">
                        <span class="detail-label">
                            Penulis
                        </span>

                        <span class="detail-value">
                            {{ $detailBuku['penulis'] }}
                        </span>
                    </div>


                    <div class="detail-item">
                        <span class="detail-label">
                            Tahun Terbit
                        </span>

                        <span class="detail-value">
                            {{ $detailBuku['tahun'] }}
                        </span>
                    </div>


                    <div class="detail-item">
                        <span class="detail-label">
                            Kategori
                        </span>

                        <span class="detail-value">
                            {{ $detailBuku['kategori'] }}
                        </span>
                    </div>

                </div>


                <div class="detail-action">

                    <a
                        href="{{ route('buku.index') }}"
                        class="btn btn-primary"
                    >
                        Lihat Buku Lainnya
                    </a>

                </div>

            </div>

        </div>

    </div>

@else

    <div class="empty-state">

        <div class="empty-icon">
            ❌
        </div>

        <h2>Buku Tidak Ditemukan</h2>

        <p>
            Maaf, buku dengan ID tersebut tidak tersedia
            di dalam koleksi perpustakaan.
        </p>

        <a
            href="{{ route('buku.index') }}"
            class="btn btn-primary"
        >
            Kembali ke Daftar Buku
        </a>

    </div>

@endif

@endsection