<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bukus = Buku::with('kategori')
            ->withCount('peminjamans')
            ->when($request->cari, function ($query, $cari) {
                $query->where(function ($q) use ($cari) {
                    $q->where('judul', 'like', "%{$cari}%")
                    ->orWhere('penulis', 'like', "%{$cari}%");
                });
            })
            ->when($request->kategori, fn ($query, $kategori) => $query->where('kategori_id', $kategori))
            ->when($request->tahun, fn ($query, $tahun) => $query->where('tahun_terbit', $tahun))
            ->latest()
            ->latest('id')
            ->paginate(10)
            ->withQueryString();

        return response()->json($bukus);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        $buku = Buku::create($request->validated());

        return response()->json(['data' => $buku], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::with(['kategori', 'peminjamans'])->find($id);

        if (! $buku) {
            return response()->json(['message' => 'not found'], 404);
        }

        return response()->json(['data' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, $id)
    {
        $buku = Buku::find($id);

        if (! $buku) {
            return response()->json(['message' => 'not found'], 404);
        }

        $buku->update($request->validated());

        return response()->json(['data' => $buku]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);

        if (! $buku) {
            return response()->json(['message' => 'buku tidak ada'], 404);
        }

        $buku->delete();

        return response()->json(['message' => 'Buku berhasil dihapus']);
    }
}

// $buku = App\Models\Buku::create([
//     'id'           => 9999,
//     'created_at'   => '2000-01-01 00:00:00',
//     'kategori_id'  => 1,
//     'judul'        => 'Uji Mass Assignment',
//     'penulis'      => 'Perdiyanto',
//     'tahun_terbit' => 2020,
// ]);
