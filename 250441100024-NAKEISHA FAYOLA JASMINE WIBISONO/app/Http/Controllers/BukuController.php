<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private array $buku = [
        [
            'id'       => 1,
            'judul'    => 'Hujan',
            'penulis'  => 'Tere Liye',
            'tahun'    => 2016,
            'kategori' => 'Fiksi',
        ],
        [
            'id'       => 2,
            'judul'    => 'Bumi Manusia',
            'penulis'  => 'Pramoedya Ananta Toer',
            'tahun'    => 1980,
            'kategori' => 'Sejarah',
        ],
        [
            'id'       => 3,
            'judul'    => 'Tentang Kamu',
            'penulis'  => 'Tere Liye',
            'tahun'    => 2016,
            'kategori' => 'Fiksi',
        ],
        [
            'id'       => 4,
            'judul'    => 'Ronggeng Dukuh paruk',
            'penulis'  => 'Ahmad Tohari',
            'tahun'    => 1982,
            'kategori' => 'Fiksi',
        ],
        [
            'id'       => 5,
            'judul'    => 'Janji',
            'penulis'  => 'Tere Liye',
            'tahun'    => 2021,
            'kategori' => 'Fiksi',
        ],
    ];

    public function index()
    {
        $daftarBuku = $this->buku;

        return view('buku.index', compact('daftarBuku'));
    }

    public function show($id)
    {
        $buku = collect($this->buku)->firstWhere('id', (int) $id);

        return view('buku.show', compact('buku'));
    }
}
