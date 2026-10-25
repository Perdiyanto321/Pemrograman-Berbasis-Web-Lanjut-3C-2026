<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::with('kategori')->get();
        $bukuList = $bukus->map(function ($buku) {
            return [
                'id'           => $buku->id,
                'judul'        => $buku->judul,
                'penulis'      => $buku->penulis,
                'tahun_terbit' => $buku->tahun_terbit,
                'kategori'     => $buku->kategori->nama ?? '-', 
                'gambar'       => $buku->gambar,
            ];
        })->toArray();

        return view('buku.index', compact('bukuList'));
    }

    public function show($id)
    {
        $bukuModel = Buku::with('kategori')->findOrFail($id);
        $buku = [
            'id'           => $bukuModel->id,
            'judul'        => $bukuModel->judul,
            'penulis'      => $bukuModel->penulis,
            'tahun_terbit' => $bukuModel->tahun_terbit,
            'kategori'     => $bukuModel->kategori->nama ?? '-', // Mengambil nama kategorinya
            'gambar'       => $bukuModel->gambar,
        ];

        return view('buku.show', compact('buku'));
    }
}
/*{
    private $bukuData = [
        [
            'id' => 1,
            'judul' => 'Educated',
            'penulis' => 'Tara Westover',
            'tahun_terbit' => 2018,
            'kategori' => 'Biografi',
            'gambar' => 'images/buku1.jpeg'
        ],
        [
            'id' => 2,
            'judul' => 'Automic Habits',
            'penulis' => 'James Clear',
            'tahun_terbit' => 2019,
            'kategori' => 'Pengembangan Diri',
            'gambar' => 'images/buku2.jpeg'
        ],
        [
            'id' => 3,
            'judul' => 'Negeri 5 Menara',
            'penulis' => 'Ahmad Fuadi',
            'tahun_terbit' => 2009,
            'kategori' => 'Novel',
            'gambar' => 'images/buku3.jpeg'
        ],
        [
            'id' => 4,
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'tahun_terbit' => 2005,
            'kategori' => 'Novel',
            'gambar' => 'images/buku4.jpeg'
        ],
        [
            'id' => 5,
            'judul' => 'Filosofi Teras',
            'penulis' => 'Henry Manampiring',
            'tahun_terbit' => 2018,
            'kategori' => 'Filsafat',
            'gambar' => 'images/buku5.jpeg'
        ],
        [
            'id' => 6,
            'judul' => 'Sang Pemimpi',
            'penulis' => 'Andrea Hirata',
            'tahun_terbit' => 2006,
            'kategori' => 'Novel',
            'gambar' => 'images/buku6.png'
        ],
    ];

    public function index()
    {
        return view('buku.index', ['bukuList' => $this->bukuData]);
    }

    public function show($id)
    {
        $bukuDetail = null;
        foreach ($this->bukuData as $buku) {
            if ($buku['id'] == $id) {
                $bukuDetail = $buku;
                break;
            }
        }
        return view('buku.show', ['buku' => $bukuDetail]);
    }
}*/