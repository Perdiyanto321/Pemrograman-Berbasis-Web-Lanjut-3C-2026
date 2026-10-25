<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private array $daftarBuku = [
        [
            'id' => 1,
            'judul' => 'Automate the Boring Stuff with Python',
            'penulis' => 'Al Sweigart',
            'tahun_terbit' => 2015,
            'kategori' => 'Pemrograman',
            'tautan_baca' => 'https://automatetheboringstuff.com/',
        ],
        [
            'id' => 2,
            'judul' => 'Clean Architecture',
            'penulis' => 'Robert C. Martin',
            'tahun_terbit' => 2017,
            'kategori' => 'Rekayasa Perangkat Lunak',
            'tautan_baca' => 'https://www.oreilly.com/library/view/clean-architecture-a/9780134494272/',
        ],
        [
            'id' => 3,
            'judul' => 'Designing Data-Intensive Applications',
            'penulis' => 'Martin Kleppmann',
            'tahun_terbit' => 2017,
            'kategori' => 'Basis Data',
            'tautan_baca' => 'https://www.oreilly.com/library/view/designing-data-intensive/9781491903063/',
        ],
        [
            'id' => 4,
            'judul' => 'Laravel: Up & Running',
            'penulis' => 'Matt Stauffer',
            'tahun_terbit' => 2019,
            'kategori' => 'Pengembangan Web',
            'tautan_baca' => 'https://www.oreilly.com/library/view/laravel-up/9781492041207/',
        ],
        [
            'id' => 5,
            'judul' => 'Eloquent JavaScript',
            'penulis' => 'Marijn Haverbeke',
            'tahun_terbit' => 2024,
            'kategori' => 'Pemrograman Web',
            'tautan_baca' => 'https://eloquentjavascript.net/',
        ],
    ];

    public function index()
    {
        return view('buku.index', [
            'daftarBuku' => $this->daftarBuku,
        ]);
    }

    public function show($id)
    {
        $buku = collect($this->daftarBuku)->firstWhere('id', (int) $id);

        return view('buku.detail', compact('buku'));
    }
}
