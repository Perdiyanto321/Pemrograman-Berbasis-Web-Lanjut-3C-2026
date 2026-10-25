@extends('layouts.app')
@section('judul', 'Detail Buku - Perpustakaan')
@section('content')
<div class="max-w-2xl mx-auto">
    @if(!empty($buku))
        <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm">
            <div class="mb-6 flex justify-center">
                <img src="{{ !empty($buku->cover ?? $buku['cover']) ? asset('images/' . ($buku->cover ?? $buku['cover'])) : asset('images/default.jpg') }}" 
                     alt="Cover {{ $buku->judul ?? $buku['judul'] }}" 
                     class="w-48 h-72 object-cover rounded-lg shadow-md border border-gray-100">
            </div>
            <h2 class="text-3xl font-bold text-pink-700 mb-4 text-center">{{ $buku->judul ?? $buku['judul'] }}</h2>
            <div class="space-y-3 mb-6 text-gray-700 bg-gray-50 p-4 rounded-lg">
                <p><strong>Penulis:</strong> {{ $buku->penulis ?? $buku['penulis'] }}</p>
                <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit ?? $buku['tahun_terbit'] }}</p>
                <p><strong>Kategori:</strong> {{ is_object($buku->kategori) ? $buku->kategori->nama_kategori : (is_array($buku['kategori'] ?? null) ? ($buku['kategori']['nama_kategori'] ?? 'Umum') : ($buku['kategori'] ?? 'Umum')) }}</p>
            </div>
            <div>
                <a href="{{ route('buku.index') }}" class="inline-block bg-pink-400 hover:bg-pink-500 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                    Kembali ke Daftar Buku
                </a>
            </div>
        </div>
    @else
        <div class="bg-white border border-gray-200 rounded-xl p-12 text-center shadow-sm">
            <p class="text-slate-500 text-lg font-semibold mb-2">Data Buku Tidak Ditemukan</p>
            <p class="text-slate-400 text-sm mb-6">Buku yang Anda cari tidak ditemukan atau sudah dihapus.</p>
            <a href="{{ route('buku.index') }}" class="inline-block bg-pink-600 hover:bg-pink-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                Kembali ke Daftar Buku
            </a>
        </div>
    @endif
</div>
@endsection