<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PeminjamanController extends Controller
{
    // Riwayat: HANYA milik user yang sedang login
    public function index(): View
    {
        $anggota = auth()->user()->anggota;

        $peminjamans = $anggota
            ? $anggota->peminjamans()->with('buku')->latest()->get()
            : collect();

        return view('peminjaman.index', compact('peminjamans'));
    }

    // Detail satu peminjaman: periksa kepemilikan
    public function show(Peminjaman $peminjaman): View
    {
        $peminjaman->load('buku', 'anggota');

        $pemilik = $peminjaman->anggota !== null
            && (int) $peminjaman->anggota->user_id === (int) auth()->id();

        // Boleh jika pemilik, atau staf yang punya permission kelola peminjaman
        abort_unless($pemilik || auth()->user()->can('kelola peminjaman'), 403);

        return view('peminjaman.show', compact('peminjaman'));
    }

    // Pengajuan: anggota_id dari server, bukan dari form
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'buku_id' => ['required', 'exists:bukus,id'],
        ]);

        $anggota = auth()->user()->anggota;

        if (! $anggota) {
            return back()->withErrors([
                'buku_id' => 'Akunmu belum terhubung dengan data anggota.',
            ]);
        }

        // Cegah pengajuan ganda untuk buku yang sama
        $sudahAda = Peminjaman::where('anggota_id', $anggota->id)
            ->where('buku_id', $data['buku_id'])
            ->whereIn('status', ['diajukan', 'dipinjam'])
            ->exists();

        if ($sudahAda) {
            return back()->withErrors([
                'buku_id' => 'Kamu sudah mengajukan atau sedang meminjam buku ini.',
            ]);
        }

        Peminjaman::create([
            'anggota_id'     => $anggota->id,
            'buku_id'        => $data['buku_id'],
            'tanggal_pinjam' => now()->toDateString(),
            'status'         => 'diajukan',
        ]);

        return redirect()->route('peminjaman.index')
            ->with('status', 'Pengajuan peminjaman terkirim, menunggu persetujuan petugas.');
    }
}