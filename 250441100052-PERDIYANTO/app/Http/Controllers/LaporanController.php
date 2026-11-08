<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\View\View;

class LaporanController extends Controller
{
    public function index(): View
    {
        // Jumlah peminjaman per status, hasilnya: ['dipinjam' => 2, 'dikembalikan' => 1, ...]
        $perStatus = Peminjaman::selectRaw('status, count(*) as jumlah')
            ->groupBy('status')
            ->pluck('jumlah', 'status');

        // 5 buku yang paling sering dipinjam
        $terpopuler = Buku::withCount('peminjamans')
            ->orderByDesc('peminjamans_count')
            ->limit(5)
            ->get();

        return view('laporan.index', [
            'perStatus'  => $perStatus,
            'total'      => Peminjaman::count(),
            'terpopuler' => $terpopuler,
        ]);
    }
}