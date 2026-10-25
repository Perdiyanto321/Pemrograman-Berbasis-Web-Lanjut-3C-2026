<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use App\Models\Buku;

class BukuController extends Controller
{
    // Halaman Daftar Buku
    public function index()
    {
        // Mengambil seluruh data buku beserta relasi kategorinya dari database
        $buku = Buku::with('kategori')->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'judul' => $item->judul,
                'penulis' => $item->penulis,
                'tahun_terbit' => $item->tahun_terbit,
                'kategori' => $item->kategori->nama ?? 'Umum',
            ];
        })->toArray();

        return view('buku.index', compact('buku'));
    }

    // Halaman Detail Buku berdasarkan ID
    public function show($id)
    {
        // Mengambil data buku dari database berdasarkan ID
        $bukuData = Buku::with('kategori')->find($id);

        $buku = null;
        if ($bukuData) {
            $buku = [
                'id' => $bukuData->id,
                'judul' => $bukuData->judul,
                'penulis' => $bukuData->penulis,
                'tahun_terbit' => $bukuData->tahun_terbit,
                'kategori' => $bukuData->kategori->nama ?? 'Umum',
            ];
        }

        return view('buku.show', compact('buku'));
    }
}