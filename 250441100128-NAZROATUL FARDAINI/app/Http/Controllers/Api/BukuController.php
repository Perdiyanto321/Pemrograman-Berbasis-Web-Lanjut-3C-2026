<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $query = Buku::with('kategori')->withCount('peminjamans')->latest();

        if ($request->has('cari')) {
            $cari = $request->cari;
            $query->where(function($q) use ($cari) {
                $q->where('judul', 'like', '%' . $cari . '%')
                  ->orWhere('penulis', 'like', '%' . $cari . '%');
            });
        }

        if ($request->has('kategori')) {
            $query->where('kategori_id', $request->kategori);
        }

        if ($request->has('tahun')) {
            $query->where('tahun_terbit', $request->tahun);
        }

        $bukus = $query->paginate(10)->withQueryString();

        return response()->json($bukus, 200);
    }

    public function store(StoreBukuRequest $request)
    {
        $buku = Buku::create($request->validated()); 

        return response()->json([
            'message' => 'Buku berhasil ditambahkan',
            'data'    => $buku->load('kategori')
        ], 201);
    }

    public function show($id)
    {
        $buku = Buku::with(['kategori', 'peminjamans'])->find($id);
        if (!$buku) {
            return response()->json(['message' => 'not found'], 404);
        }
        return response()->json($buku, 200);
    }

    public function update(UpdateBukuRequest $request, $id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return response()->json(['message' => 'not found'], 404);
        }

        $buku->update($request->validated());

        return response()->json([
            'message' => 'Buku berhasil diperbarui',
            'data'    => $buku->load('kategori')
        ], 200);
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return response()->json(['message' => 'not found'], 404);
        }

        $buku->delete();

        return response()->json(['message' => 'Buku berhasil dihapus'], 200);
    }

    public function rekapBukuPerKategori()
    {
        $rekap = Kategori::withCount('bukus')->get();

        return response()->json([
            'data' => $rekap
        ], 200);
    }

    public function rekapPeminjamanPerBuku()
    {
        $rekap = Buku::withCount('peminjamans')->get();

        return response()->json([
            'data' => $rekap
        ], 200);
    }
}