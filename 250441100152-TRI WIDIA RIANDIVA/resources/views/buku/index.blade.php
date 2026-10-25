@extends('layouts.app')

@section('konten')
<div class="container bagian-buku">
    <div class="grid-buku">
        @foreach ($buku as $b)
            <x-kartu-buku 
                :judul="$b['judul']" 
                :penulis="$b['penulis']" 
                :tahun="$b['tahun_terbit']"
                :cover="$b['cover']"
            >
                <a href="{{ route('buku.detail', $b['id']) }}" class="btn-overlay-detail">
                    DETAIL BUKU
                </a>
            </x-kartu-buku>
        @endforeach
    </div>
</div>
@endsection