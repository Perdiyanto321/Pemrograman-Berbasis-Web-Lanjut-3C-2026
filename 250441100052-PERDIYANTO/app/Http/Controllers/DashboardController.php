<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    // Pengarah: tidak menampilkan halaman, hanya memilih tujuan
    public function index(): RedirectResponse
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        }

        if ($user->hasRole('petugas')) {
            return redirect()->route('petugas.dashboard');
        }

        return redirect()->route('siswa.dashboard');
    }

    public function admin(): View
    {
        return view('dashboard', [
            'totalBuku' => Buku::count(),
            'totalUser' => User::count(),
            'menunggu'  => Peminjaman::where('status', 'diajukan')->count(),
        ]);
    }

    public function petugas(): View
    {
        return view('dashboard', [
            'totalBuku' => Buku::count(),
            'menunggu'  => Peminjaman::where('status', 'diajukan')->count(),
        ]);
    }

    public function siswa(): View
    {
        $anggota = auth()->user()->anggota;

        return view('dashboard', [
            'aktif' => $anggota
                ? $anggota->peminjamans()->where('status', 'dipinjam')->count()
                : 0,
        ]);
    }
}