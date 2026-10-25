<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;
use Illuminate\Http\Request;


class BukuController extends Controller
{
    // a. Index: Daftar buku dengan pencarian, filter, pagination, withCount, & urutan terbaru[cite: 3, 4]
    public function index(Request $request)
    {
        $query = Buku::with('kategori')->withCount('peminjamans');

        // Filter berdasarkan pencarian judul atau penulis (cari)
        if ($request->has('cari')) {
            $cari = $request->input('cari');
            $query->where(function ($q) use ($cari) {
                $q->where('judul', 'like', "%{$cari}%")
                    ->orWhere('penulis', 'like', "%{$cari}%");
            });
        }

        // Filter berdasarkan kategori_id
        if ($request->has('kategori')) {
            $query->where('kategori_id', $request->input('kategori'));
        }

        // Filter berdasarkan tahun terbit
        if ($request->has('tahun')) {
            $query->where('tahun_terbit', $request->input('tahun'));
        }

        // Urutkan data terbaru lebih dulu
        $query->latest();

        // Pagination 10 data per halaman (query string otomatis terbawa)[cite: 4]
        $buku = $query->paginate(10)->appends($request->query());

        return response()->json([
            'success' => true,
            'data' => $buku
        ], 200);
    }

    // b. Store: Menyimpan data baru menggunakan validated()[cite: 3]
    public function store(StoreBukuRequest $request)
    {
        $buku = Buku::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Buku berhasil ditambahkan',
            'data' => $buku
        ], 201);
    }

    // c. Show: Detail satu buku beserta relasi kategori dan peminjaman[cite: 3]
    // pages:
    public function show($id)
    {
        $buku = Buku::with(['kategori', 'peminjamans'])->find($id);

        if (!$buku) {
            return response()->json([
                'message' => 'not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $buku
        ], 200);
    }

    // d. Update: Memperbarui data buku[cite: 4]
    public function update(UpdateBukuRequest $request, $id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return response()->json([
                'message' => 'not found'
            ], 404);
        }

        $buku->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Buku berhasil diperbarui',
            'data' => $buku
        ], 200);
    }

    // e. Destroy: Menghapus data buku[cite: 4]
    public function destroy($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return response()->json([
                'message' => 'not found'
            ], 404);
        }

        $buku->delete();

        return response()->json([
            'success' => true,
            'message' => 'Buku berhasil dihapus'
        ], 200);
    }
}