<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;

class RekapController extends Controller
{
    // a. Jumlah buku per kategori[cite: 6]
    public function bukuPerKategori()
    {
        $rekap = Kategori::withCount('bukus')->get();

        return response()->json([
            'success' => true,
            'data' => $rekap
        ], 200);
    }

    // b. Total peminjaman per buku[cite: 6]
    public function peminjamanPerBuku()
    {
        $rekap = Buku::withCount('peminjamans')->get();

        return response()->json([
            'success' => true,
            'data' => $rekap
        ], 200);
    }
}