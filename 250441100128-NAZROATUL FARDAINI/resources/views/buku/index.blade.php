@extends('layouts.main')

@section('content')
    <h2>Daftar Buku</h2>
    
    <div class="grid-buku">
        @foreach($bukuList as $buku)
            <x-kartu-buku 
                :judul="$buku['judul']"
                :penulis="$buku['penulis']"
                :tahun="$buku['tahun_terbit']"
                :gambar="$buku['gambar']"
            >
                <a href="{{ route('buku.show', $buku['id']) }}" class="btn">Lihat Detail</a>
            </x-kartu-buku>
        @endforeach
    </div>
@endsection