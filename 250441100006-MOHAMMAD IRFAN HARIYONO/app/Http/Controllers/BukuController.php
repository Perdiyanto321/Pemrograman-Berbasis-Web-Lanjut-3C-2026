<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Soal 5
    private $bukuList = [
        [
            'id' => 1,
            'judul' => 'Sejarah Perang Dunia',
            'penulis' => 'Saut Pasaribu',
            'tahun_terbit' => 2020,
            'kategori' => 'Sejarah'
        ],
        [
            'id' => 2,
            'judul' => 'Hujan',
            'penulis' => 'Tere Liye',
            'tahun_terbit' => 2016,
            'kategori' => 'Fiksi'
        ],
        [
            'id' => 3,
            'judul' => 'The Power of Habit',
            'penulis' => 'Charles Duhigg',
            'tahun_terbit' => 2019,
            'kategori' => 'Motivasi'
        ],
        [
            'id' => 4,
            'judul' => 'Koala Kumal',
            'penulis' => 'Raditya Dika',
            'tahun_terbit' => 2016,
            'kategori' => 'Kisah Hidup'
        ],
        [
            'id' => 5,
            'judul' => 'Filosofi Teras',
            'penulis' => 'Henry Manampiring',
            'tahun_terbit' => 2020,
            'kategori' => 'Filsafat'
        ],
    ];

    public function index()
    {
        return view('buku.index', ['bukuList' => $this->bukuList]);
    }

    public function show($id)
    {
        $buku = collect($this->bukuList)->firstWhere('id', (int)$id);

        return view('buku.show', compact('buku'));
    }
}