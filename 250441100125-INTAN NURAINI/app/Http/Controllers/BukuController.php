<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private $buku = [
        [
            'id' => 110,
            'judul' => 'Tentang Kamu',
            'penulis' => 'Tere Liye',
            'tahun' => 2016,
            'kategori' => 'Novel'
        ],
        [
            'id' => 111,
            'judul' => 'Bumi',
            'penulis' => 'Tere Liye',
            'tahun' => 2014,
            'kategori' => 'Fantasi'
        ],
        [
            'id' => 112,
            'judul' => 'Negeri 5 Menara',
            'penulis' => 'Ahmad Fuadi',
            'tahun' => 2009,
            'kategori' => 'Novel'
        ],
        [
            'id' => 113,
            'judul' => 'Filosofi Teras',
            'penulis' => 'Henry Manampiring',
            'tahun' => 2018,
            'kategori' => 'Pengembangan Diri'
        ],
        [
            'id' => 114,
            'judul' => 'The Devil',
            'penulis' => 'alreschariys',
            'tahun' => 2025,
            'kategori' => 'Novel'
        ],
        [
            'id' => 115,
            'judul' => 'Perahu Kertas',
            'penulis' => 'Dee Lestari',
            'tahun' => 2009,
            'kategori' => 'Novel'
        ],
        [
            'id' => 116,
            'judul' => 'Atomic Habits',
            'penulis' => 'James Clear',
            'tahun' => 2018,
            'kategori' => 'Pengembangan Diri'
        ],
        [
            'id' => 117,
            'judul' => 'Bumi Manusia',
            'penulis' => 'Pramoedya Ananta Toer',
            'tahun' => 1980,
            'kategori' => 'Sejarah'
        ],
        [
            'id' => 118,
            'judul' => 'Dilan 1990',
            'penulis' => 'Pidi Baiq',
            'tahun' => 2014,
            'kategori' => 'Romansa'
        ],
        [
            'id' => 119,
            'judul' => 'The Psychology of Money',
            'penulis' => 'Morgan Housel',
            'tahun' => 2020,
            'kategori' => 'Keuangan'
        ],
    ];

    public function index()
    {
        return view('buku.index', [
            'buku' => $this->buku
        ]);
    }

    public function detail($id)
    {
        $buku = null;

        foreach ($this->buku as $data) {
            if ($data['id'] == $id) {
                $buku = $data;
                break;
            }
        }

        return view('buku.detail', [
            'buku' => $buku
        ]);
    }
}