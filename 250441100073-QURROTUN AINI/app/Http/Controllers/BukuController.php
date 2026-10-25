<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    private $books = [
        [
            'id' => 1,
            'judul' => 'Hujan',
            'penulis' => 'Tere Liye',
            'tahun' => 2016,
            'kategori' => 'Novel',
        ],
        [
            'id' => 2,
            'judul' => 'Dompet Ayah Sepatu Ibu',
            'penulis' => 'JS. Khairen',
            'tahun' => 2023,
            'kategori' => 'Novel',
        ],
        [
            'id' => 3,
            'judul' => 'Berani Tidak Disukai',
            'penulis' => 'Ichiro Kishimi dan Fumitake Koga',
            'tahun' => 2019,
            'kategori' => 'Pengembangan Diri',
        ],
        [
            'id' => 4,
            'judul' => 'Laut Bercerita',
            'penulis' => 'Leila S. Chudori',
            'tahun' => 2017,
            'kategori' => 'Novel Fiksi Sejarah',
        ],
        [
            'id' => 5,
            'judul' => 'Cantik Itu Luka',
            'penulis' => 'Ratih Kumala',
            'tahun' => 2002,
            'kategori' => 'Novel Sastra',
        ],
    ];

    public function index()
    {
        return view('buku.index', [
            'books' => $this->books
        ]);
    }

    public function show($id)
    {
        $book = collect($this->books)->firstWhere('id', $id);

        return view('buku.show', [
            'book' => $book
        ]);
    }
}
