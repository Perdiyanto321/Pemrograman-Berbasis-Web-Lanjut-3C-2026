<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class RekapController extends Controller
{
    public function bukuPerKategori()
    {
        $data = Kategori::select('id', 'nama')->withCount('bukus')->get();

        return response()->json(['data' => $data]);
    }

    public function peminjamanPerBuku()
    {
        $data = Buku::select('id', 'judul')->withCount('peminjamans')->get();

        return response()->json(['data' => $data]);
    }
}
