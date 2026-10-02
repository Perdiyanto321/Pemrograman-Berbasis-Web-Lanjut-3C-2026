<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    protected $buku = [
    [
        'id' => 1,
        'judul' => 'Laravel: Up & Running',
        'penulis' => 'Matt Stauffer',
        'tahun_terbit' => 2019,
        'kategori' => 'Pemrograman Web',
    ],
    [
        'id' => 2,
        'judul' => 'Clean Code',
        'penulis' => 'Robert C. Martin',
        'tahun_terbit' => 2008,
        'kategori' => 'Rekayasa Perangkat Lunak',
    ],
    [
        'id' => 3,
        'judul' => 'Database System Concepts',
        'penulis' => 'Abraham Silberschatz',
        'tahun_terbit' => 2019,
        'kategori' => 'Basis Data',
    ],
    [
        'id' => 4,
        'judul' => 'Introduction to Algorithms',
        'penulis' => 'Thomas H. Cormen',
        'tahun_terbit' => 2009,
        'kategori' => 'Algoritma',
    ],
    [
        'id' => 5,
        'judul' => 'Design Patterns',
        'penulis' => 'Erich Gamma',
        'tahun_terbit' => 1994,
        'kategori' => 'Rekayasa Perangkat Lunak',
    ],
];

    public function index() {
        return view('buku.index', ['buku' => $this->buku]);
    }

    public function show($id) {
        $temu = null;

        foreach ($this->buku as $buku) {
            if ($buku["id"] == $id) {
                $temu = $buku;
                break;
            } 
        }

        return view('buku.show', ['buku' => $temu]);
    }
}
