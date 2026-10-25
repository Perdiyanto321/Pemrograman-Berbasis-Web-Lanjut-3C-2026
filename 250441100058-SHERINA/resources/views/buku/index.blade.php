@extends('layouts.app')
@section('judul', 'Koleksi Buku - Perpustakaan')
@section('content')
<div class="mb-10 bg-gradient-to-r from-pink-600 to-pink-400 rounded-3xl p-8 md:p-10 text-white shadow-xl shadow-pink-100 flex justify-between items-center">
    <div>
        <span class="bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">
            Katalog Aktif
        </span>
        <h1 class="text-3xl font-extrabold mt-3">Koleksi Buku Perpustakaan</h1>
        <p class="text-pink-100 mt-2 text-sm md:text-base">
            Temukan berbagai referensi menarik untuk menunjang perkuliahan dan wawasan Anda.
        </p>
    </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($buku as $item)
        <div class="card-hover bg-white rounded-2xl p-6 shadow-sm flex flex-col justify-between">
            <div>
                <span class="inline-block bg-pink-50 text-pink-600 text-xs font-bold px-3 py-1 rounded-full mb-4">
                    {{ is_object($item->kategori) ? $item->kategori->nama_kategori : (is_array($item['kategori'] ?? null) ? ($item['kategori']['nama_kategori'] ?? 'Umum') : ($item['kategori'] ?? 'Umum')) }}
                </span>
                
                <h3 class="text-xl font-bold text-slate-900 mb-2 hover:text-pink-600 transition">
                    {{ $item->judul ?? $item['judul'] }}
                </h3>
                <img src="{{ !empty($item->cover ?? $item['cover']) ? asset('images/' . ($item->cover ?? $item['cover'])) : asset('images/default.jpg') }}" alt="Cover {{ $item->judul ?? $item['judul'] }}" class="w-full h-64 object-cover rounded-md mb-4 shadow">
               
                <div class="space-y-1 text-sm text-slate-500 mb-6">
                    <p><strong>Penulis:</strong> {{ $item->penulis ?? $item['penulis'] }}</p>
                    <p><strong>Tahun Terbit:</strong> {{ $item->tahun_terbit ?? $item['tahun_terbit'] }}</p>
                </div>
            </div>
            <div>
                <a href="{{ route('buku.show', $item->id ?? $item['id']) }}" class="block text-center bg-pink-600 hover:bg-pink-700 text-white font-semibold text-sm py-3 px-4 rounded-xl shadow-md shadow-pink-200 transition-all">
                    Lihat Detail Buku &rarr;
                </a>
            </div>
        </div>
    @empty
        <div class="col-span-1 md:col-span-2 lg:col-span-3 bg-white rounded-2xl p-12 text-center shadow-sm">
            <p class="text-slate-500 text-lg font-semibold">Data Buku Tidak Ditemukan</p>
            <p class="text-slate-400 text-sm mt-1">Belum ada data buku yang tersedia saat ini.</p>
        </div>
    @endforelse
</div>
@endsection