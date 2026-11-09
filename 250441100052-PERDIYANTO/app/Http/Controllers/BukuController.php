<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{

    public function index()
    {
        $bukus = Buku::with('kategori')->get();

        return view('buku.index', compact('bukus'));
    }

    public function show($id) {

        $temu = Buku::join('kategoris', 'bukus.kategori_id', '=', 'kategoris.id')
            ->select('bukus.*', 'kategoris.nama as kategori')
            ->where('bukus.id', $id)
            ->first();

        return view('buku.show', ['buku' => $temu]);
    }

    public function cari(Request $request)
    {
        $judul = $request->query('judul');

        $bukus = DB::select(
            "SELECT * FROM bukus WHERE judul LIKE ?",
            ["%$judul%"]
        );

        return response()->json($bukus);
    }
}
