<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
   
    private $dataBuku = [
        [
            'id' => 1,
            'judul' => 'Pemrograman Web dengan Laravel',
            'penulis' => 'Budi Raharjo',
            'tahun_terbit' => 2023,
            'kategori' => 'Teknologi'
        ],
        [
            'id' => 2,
            'judul' => 'Algoritma dan Struktur Data',
            'penulis' => 'Rinaldi Munir',
            'tahun_terbit' => 2021,
            'kategori' => 'Komputer'
        ],
        [
            'id' => 3,
            'judul' => 'Basis Data Relasional',
            'penulis' => 'Fathansyah',
            'tahun_terbit' => 2020,
            'kategori' => 'Database'
        ],
        [
            'id' => 4,
            'judul' => 'Jaringan Komputer Modern',
            'penulis' => 'Andrew S. Tanenbaum',
            'tahun_terbit' => 2019,
            'kategori' => 'Jaringan'
        ],
        [
            'id' => 5,
            'judul' => 'Kecerdasan Buatan dan Pembelajaran Mesin',
            'penulis' => 'Suyanto',
            'tahun_terbit' => 2022,
            'kategori' => 'Kecerdasan Buatan'
        ],
    ];

    
    public function index()
    {
        return view('buku.index', ['bukuList' => $this->dataBuku]);
    }

   
public function show(int $id)
{
    $buku = collect($this->dataBuku)->firstWhere('id', (int) $id);
    return view('buku.show', compact('buku'));
}
}

  

