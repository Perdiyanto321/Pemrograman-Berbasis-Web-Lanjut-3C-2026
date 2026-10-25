<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::with('kategori')->get();
        return view('buku.index', compact('buku'));
    }

    public function show($id)
    {
        $buku = Buku::with(['kategori', 'peminjamans'])->find($id);
        return view('buku.show', compact('buku'));
    }
}