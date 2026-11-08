<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KelolaPeminjamanController extends Controller
{
    // Semua pengajuan dan peminjaman (khusus staf)
    public function index(): View
    {
        return view('kelola.peminjaman', [
            'peminjamans' => Peminjaman::with(['buku', 'anggota'])->latest()->get(),
        ]);
    }

    // Buku yang sedang dipinjam
    public function pengembalian(): View
    {
        return view('kelola.pengembalian', [
            'peminjamans' => Peminjaman::with(['buku', 'anggota'])
                ->where('status', 'dipinjam')
                ->latest()
                ->get(),
        ]);
    }

    public function setujui(Peminjaman $peminjaman): RedirectResponse
    {
        return $this->ubahStatus(
            $peminjaman,
            syarat: 'diajukan',
            perubahan: ['status' => 'dipinjam'],
            pesan: 'Peminjaman disetujui.',
        );
    }

    public function tolak(Peminjaman $peminjaman): RedirectResponse
    {
        return $this->ubahStatus(
            $peminjaman,
            syarat: 'diajukan',
            perubahan: ['status' => 'ditolak'],
            pesan: 'Peminjaman ditolak.',
        );
    }

    public function kembalikan(Peminjaman $peminjaman): RedirectResponse
    {
        return $this->ubahStatus(
            $peminjaman,
            syarat: 'dipinjam',
            perubahan: [
                'status' => 'dikembalikan',
                'tanggal_kembali' => now()->toDateString(),
            ],
            pesan: 'Pengembalian dicatat.',
        );
    }

    // Satu tempat untuk semua perpindahan status
    private function ubahStatus(Peminjaman $peminjaman, string $syarat, array $perubahan, string $pesan): RedirectResponse
    {
        if ($peminjaman->status !== $syarat) {
            return back()->withErrors([
                'status' => "Aksi ditolak: status peminjaman saat ini '{$peminjaman->status}', bukan '{$syarat}'.",
            ]);
        }

        $peminjaman->update($perubahan);

        return back()->with('status', $pesan);
    }
}