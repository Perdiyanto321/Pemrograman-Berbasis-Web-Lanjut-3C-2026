<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private function dataBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Ayat-Ayat Cinta',
                'penulis' => 'Habiburrahman El Shirazy',
                'tahun' => 2004,
                'kategori' => 'Novel'
            ],
            [
                'id' => 2,
                'judul' => 'Harry Potter and the Philosophers Stone',
                'penulis' => 'J.K. Rowling',
                'tahun' => 1997,
                'kategori' => 'Fantasi'
            ],
            [
                'id' => 3,
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'tahun' => 2016,
                'kategori' => 'Romansa'
            ],
            [
                'id' => 4,
                'judul' => 'Habis Gelap Terbitlah Terang',
                'penulis' => 'R.A Kartini',
                'tahun' => 1992,
                'kategori' => 'Biografi'
            ],
            [
                'id' => 5,
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'tahun' => 2018,
                'kategori' => 'Pengembangan Diri'
            ],
        ];
    }

    public function index()
    {
        $buku = $this->dataBuku();

        return view('buku', compact('buku'));
    }

    public function show($id)
    {
        $buku = $this->dataBuku();

        $detail = null;

        foreach ($buku as $item) {
            if ($item['id'] == $id) {
                $detail = $item;
                break;
            }
        }

        return view('detail', compact('detail'));
    }
}