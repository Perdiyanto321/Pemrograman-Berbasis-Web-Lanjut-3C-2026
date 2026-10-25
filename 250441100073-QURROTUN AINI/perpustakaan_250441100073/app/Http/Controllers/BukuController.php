<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    private $books = [
        [
            'id' => 1,
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'tahun' => 2005,
            'kategori' => 'Novel',
        ],
        [
            'id' => 2,
            'judul' => 'Bumi Manusia',
            'penulis' => 'Pramoedya Ananta Toer',
            'tahun' => 1980,
            'kategori' => 'Sejarah',
        ],
        [
            'id' => 3,
            'judul' => 'Filosofi Teras',
            'penulis' => 'Henry Manampiring',
            'tahun' => 2018,
            'kategori' => 'Pengembangan Diri',
        ],
        [
            'id' => 4,
            'judul' => 'Negeri 5 Menara',
            'penulis' => 'Ahmad Fuadi',
            'tahun' => 2009,
            'kategori' => 'Novel',
        ],
        [
            'id' => 5,
            'judul' => 'Atomic Habits',
            'penulis' => 'James Clear',
            'tahun' => 2018,
            'kategori' => 'Pengembangan Diri',
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
