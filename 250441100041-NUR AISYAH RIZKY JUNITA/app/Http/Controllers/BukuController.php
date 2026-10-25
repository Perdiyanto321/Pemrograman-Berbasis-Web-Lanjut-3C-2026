<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private $buku = [
        [
            'id' => 1,
            'judul' => 'Pemrograman Laravel',
            'penulis' => 'Andi Setiawan',
            'tahun' => 2024,        
            'kategori' => 'Pemrograman',
        ],
        [
            'id' => 2,
            'judul' => 'Belajar PHP Dasar',
            'penulis' => 'Budi Santoso',
            'tahun' => 2023,
            'kategori' => 'Pemrograman',
        ],
        [
            'id' => 3,
            'judul' => 'Dasar-Dasar Basis Data',
            'penulis' => 'Citra Dewi',
            'tahun' => 2022,
            'kategori' => 'Database',
        ],
        [
            'id' => 4,
            'judul' => 'Jaringan Komputer',
            'penulis' => 'Deni Kurniawan',
            'tahun' => 2024,
            'kategori' => 'Jaringan',
        ],
        [
            'id' => 5,
            'judul' => 'Rekayasa Perangkat Lunak',
            'penulis' => 'Eka Pratama',
            'tahun' => 2025,
            'kategori' => 'RPL',
        ],
    ];

    public function index()
    {
        $buku = $this->buku;

        return view('buku.index', compact('buku'));
    }

    public function show($id)
    {
        $buku = collect($this->buku)->firstWhere('id', $id);

        return view('buku.show', compact('buku'));
    }
}