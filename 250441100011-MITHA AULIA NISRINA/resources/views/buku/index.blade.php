@extends('layouts.app')

@section('title', $kategori ? $kategori . ' - KATAMITHA' : 'Daftar Buku - KATAMITHA')

@section('content')

    <div class="book-list-page">

        <div class="section-heading">

            @if ($kategori)

                <span>KOLEKSI KATAMITHA</span>

                <h2>
                    {{ $kategori }}
                </h2>

                <p>
                    Berikut adalah koleksi buku dalam kategori
                    {{ $kategori }} yang tersedia di KATAMITHA.
                    Temukan bacaan yang sesuai dengan minatmu dan
                    nikmati berbagai cerita, pengetahuan, serta
                    perspektif dari setiap halaman.
                </p>

            @else

                <span>KOLEKSI KATAMITHA</span>

                <h2>
                    Daftar Buku
                </h2>

                <p>
                    Berikut adalah koleksi buku yang tersedia di KATAMITHA.
                    Jelajahi berbagai bacaan dari beragam kategori dan
                    temukan cerita, pengetahuan, serta perspektif baru
                    yang dapat menemani perjalanan membacamu.
                </p>

            @endif

            <div class="book-list-meta">

                <div>
                    <strong>{{ count($buku) }}</strong>
                    <span>BUKU TERSEDIA</span>
                </div>

                <div>
                    <strong>KATAMITHA</strong>
                    <span>PERPUSTAKAAN DIGITAL</span>
                </div>

                <div>
                    <strong>6</strong>
                    <span>KATEGORI BACAAN</span>
                </div>

            </div>

        </div>
        <div class="book-grid">

            @foreach ($buku as $item)

                <x-book-card :id="$item['id']" :title="$item['title']" :author="$item['author']" :year="$item['year']"
                    :image="$item['image']">
                    {{ $item['category'] }}
                </x-book-card>

            @endforeach

        </div>

    </div>

@endsection