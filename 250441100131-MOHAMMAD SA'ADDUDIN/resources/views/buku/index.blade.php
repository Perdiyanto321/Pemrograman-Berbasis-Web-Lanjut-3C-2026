@extends('layouts.app')

@section('judul', 'Daftar Buku')

@section('konten')
    <h2>Daftar Buku</h2>

    <div class="daftar-buku">
        @foreach ($daftarBuku as $buku)
            <x-kartu-buku
                :nomor="$loop->iteration"
                :judul="$buku['judul']"
                :penulis="$buku['penulis']"
                :tahun-terbit="$buku['tahun_terbit']"
                :url="route('buku.show', $buku['id'])"
            >
                <x-slot:kategori>
                    {{ $buku['kategori'] }}
                </x-slot:kategori>
            </x-kartu-buku>
        @endforeach
    </div>
@endsection
