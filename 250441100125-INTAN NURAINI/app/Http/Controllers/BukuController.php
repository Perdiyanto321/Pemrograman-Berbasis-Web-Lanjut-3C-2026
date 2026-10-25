<?php

namespace App\Http\Controllers;

use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::query()
            ->join('kategoris', 'bukus.kategori_id', '=', 'kategoris.id')
            ->select(
                'bukus.id',
                'bukus.judul',
                'bukus.penulis',
                'bukus.tahun_terbit',
                'kategoris.nama as kategori'
            )
            ->get()
            ->map(function ($data) {
                return [
                    'id' => $data->id,
                    'judul' => $data->judul,
                    'penulis' => $data->penulis,
                    'tahun' => $data->tahun_terbit,
                    'kategori' => $data->kategori,
                ];
            });

        return view('buku.index', [
            'buku' => $buku
        ]);
    }

    public function detail(int $id)
    {
        $data = Buku::query()
            ->join('kategoris', 'bukus.kategori_id', '=', 'kategoris.id')
            ->where('bukus.id', $id)
            ->select(
                'bukus.id',
                'bukus.judul',
                'bukus.penulis',
                'bukus.tahun_terbit',
                'kategoris.nama as kategori'
            )
            ->first();

        $buku = null;

        if ($data) {
            $buku = [
                'id' => $data->id,
                'judul' => $data->judul,
                'penulis' => $data->penulis,
                'tahun' => $data->tahun_terbit,
                'kategori' => $data->kategori,
            ];
        }

        return view('buku.detail', [
            'buku' => $buku
        ]);
    }
}