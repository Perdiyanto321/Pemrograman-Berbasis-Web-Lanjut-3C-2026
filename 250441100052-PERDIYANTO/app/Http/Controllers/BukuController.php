<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function index() {
        $buku = Buku::join('kategoris', 'bukus.kategori_id', '=', 'kategoris.id')
            ->select('bukus.*', 'kategoris.nama as kategori')
            ->get();

        return view('buku.index', ['buku' => $buku]);
    }

    public function show($id) {

        $temu = Buku::join('kategoris', 'bukus.kategori_id', '=', 'kategoris.id')
            ->select('bukus.*', 'kategoris.nama as kategori')
            ->where('bukus.id', $id)
            ->first();

        return view('buku.show', ['buku' => $temu]);
    }
}
