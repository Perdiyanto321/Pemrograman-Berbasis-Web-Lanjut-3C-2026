<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    private function getBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'tahun' => 2005,
                'kategori' => 'Novel',
                'foto' => 'lp.jpg',
            ],
            [
                'id' => 2,
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya Ananta Toer',
                'tahun' => 1980,
                'kategori' => 'Sejarah',
                'foto' => 'bm.jpg',
            ],
            [
                'id' => 3,
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'tahun' => 2009,
                'kategori' => 'Novel',
                'foto' => '5.jpg',
            ],
            [
                'id' => 4,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'tahun' => 2018,
                'kategori' => 'Pengembangan Diri',
                'foto' => 'ft.jpg',
            ],
            [
                'id' => 5,
                'judul' => 'Pemrograman Web dengan Laravel',
                'penulis' => 'Budi Raharjo',
                'tahun' => 2023,
                'kategori' => 'Teknologi',
                'foto' => 'pl.jpg',
            ],
        ];
    }

    public function index()
    {
        $buku = $this->getBuku();

        return view('buku.index', compact('buku'));
    }

    public function show($id)
    {
        $buku = $this->getBuku();

        $detailBuku = null;

        foreach ($buku as $item) {
            if ($item['id'] == $id) {
                $detailBuku = $item;
                break;
            }
        }

        return view('buku.show', compact('detailBuku'));
    }
}