<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        // Ubah nama variabel dari $bukus menjadi $daftarBuku
        $daftarBuku = Buku::with('kategori')->get();
        return view('buku.index', compact('daftarBuku'));
    }

    public function show($id)
    {
        $buku = Buku::with('kategori')->findOrFail($id);
        return view('buku.show', compact('buku'));
    }
}