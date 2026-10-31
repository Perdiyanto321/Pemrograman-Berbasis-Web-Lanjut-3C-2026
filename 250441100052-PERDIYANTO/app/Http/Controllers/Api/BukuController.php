<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Http\Resources\BukuResource;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    private function aturanValidasi(): array
    {
        return [
            'kategori_id'  => ['required', 'exists:kategoris,id'],
            'judul'        => ['required', 'string', 'min:3', 'max:150'],
            'penulis'      => ['required', 'string', 'min:3', 'max:100'],
            'tahun_terbit' => ['required', 'integer', 'between:1900,' . date('Y')],
        ];
    }

    private function pesanValidasi(): array
    {
        return [
            'required'             => ':Attribute wajib diisi.',
            'kategori_id.exists'   => 'Kategori yang dipilih tidak valid.',
            'judul.string'         => 'Judul buku harus berupa teks.',
            'judul.min'            => 'Judul buku minimal 3 karakter',
            'judul.max'            => 'Judul buku maksimal 150 karakter',
            'penulis.string'       => 'Penulis harus berupa teks.',
            'penulis.min'          => 'Penulis minimal 3 karakter',
            'penulis.max'          => 'Penulis maksimal 100 karakter',
            'tahun_terbit.integer' => 'Tahun terbit harus berupa bilangan bulat.',
            'tahun_terbit.between' => 'Tahun terbit harus antara 1900 sampai ' . date('Y'),
        ];
    }

    private function namaAtribut(): array
    {
        return [
            'kategori_id'  => 'kategori',
            'tahun_terbit' => 'tahun terbit',
        ];
    }

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

        return BukuResource::collection($bukus);
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            $this->aturanValidasi(),
            $this->pesanValidasi(),
            $this->namaAtribut()
        );

        $buku = Buku::create($data);
        $buku->load('kategori');

        return (new BukuResource($buku))->response()->setStatusCode(201);
    }

    public function show($id)
    {
        $buku = Buku::with(['kategori', 'peminjamans'])->find($id);

        if (! $buku) {
            return response()->json(['message' => 'not found'], 404);
        }

        return new BukuResource($buku);
    }

    public function update(Request $request, $id)
    {
        $aturan = array_map(
            fn ($rule) => array_merge(['sometimes'], $rule),
            $this->aturanValidasi()
        );

        $data = $request->validate($aturan, $this->pesanValidasi(), $this->namaAtribut());

        $buku = Buku::find($id);

        if (! $buku) {
            return response()->json(['message' => 'not found'], 404);
        }

        $buku->update($data);
        $buku->load('kategori');

        return new BukuResource($buku);
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);

        if (! $buku) {
            return response()->json(['message' => 'not found'], 404);
        }

        $buku->delete();

        return response()->json(['message' => 'Buku berhasil dihapus']);
    }
}