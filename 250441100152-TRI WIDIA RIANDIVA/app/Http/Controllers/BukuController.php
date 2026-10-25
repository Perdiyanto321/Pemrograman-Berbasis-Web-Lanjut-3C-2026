<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function getDaftarBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2005,
                'kategori' => 'Novel/Fiksi',
                'cover' => asset('images/laskarpelangi.jpg'),
            ],
            [
                'id' => 2,
                'judul' => 'Laut Bercerita',
                'penulis' => 'Leila S. Chudori',
                'tahun_terbit' => 2007,
                'kategori' => 'Novel/Fiksi',
                'cover' => asset('images/lautbercerita.jpg'),
            ],
            [
                'id' => 3,
                'judul' => 'Seporsi Mie Ayam Sebelum Mati',
                'penulis' => 'Khoirul Trian',
                'tahun_terbit' => 2024,
                'kategori' => 'Novel/Fiksi',
                'cover' => asset('images/seporsimieayam.jpg'),
            ],
            [
                'id' => 4,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'tahun_terbit' => 2018,
                'kategori' => 'Pengembangan Diri/Non-Fiksi',
                'cover' => asset('images/filosofiteras.png'),
            ],
            [
                'id' => 5,
                'judul' => 'Berpayung Tuhan',
                'penulis' => 'Jaquenza Eden',
                'tahun_terbit' => 2025,
                'kategori' => 'Novel/Fiksi',
                'cover' => asset('images/berpayungtuhan.jpg'),
            ],
            [
                'id' => 6,
                'judul' => 'Hidup Begitu Indah Hanya Itu Yang Kita Punya',
                'penulis' => 'Dea Anugrah',
                'tahun_terbit' => 2019,
                'kategori' => 'Novel/Fiksi',
                'cover' => asset('images/hidupbbegituindah.jpeg'),
            ],
            [
                'id' => 7,
                'judul' => 'Sabar Paling Dalam',
                'penulis' => 'Fajar Sulaiman',
                'tahun_terbit' => 2022,
                'kategori' => 'Novel/Fiksi',
                'cover' => asset('images/sabarpalingdalam.jpeg'),
            ],
            [
                'id' => 8,
                'judul' => 'Gesture',
                'penulis' => 'Zaka Putra Ramdani',
                'tahun_terbit' => 2021,
                'kategori' => 'Pengembangan Diri/Non-Fiksi',
                'cover' => asset('images/gesture.jpeg'),
            ],
        ];
    }

    public function index()
{
    return view('buku.index', [
        'buku' =>$this -> getDaftarBuku()
    ]);
}

    public function detail($id)
{
    $buku = null;

    foreach ($this->getDaftarBuku() as $data) {
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