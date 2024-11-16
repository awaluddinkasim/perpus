<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PeminjamanController extends Controller
{
    public function index(): View
    {
        return view('pages.peminjaman', [
            'daftarPeminjaman' => Peminjaman::all()
                ->sortByDesc(fn($peminjaman) => $peminjaman->tanggal_pinjam)
                ->sortByDesc(fn($peminjaman) => $peminjaman->status),
            'daftarAnggota' => Anggota::orderBy('nis')->get(),
            'daftarBuku' => Buku::orderBy('judul')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required',
            'keterangan' => 'nullable',
        ]);

        $data['petugas'] = auth()->user()->nama;

        Peminjaman::create($data);

        return redirect()->route('peminjaman')->with('success', 'Peminjaman berhasil disimpan.');
    }

    public function show(Peminjaman $peminjaman): View
    {
        return view('pages.peminjaman-detail', [
            'peminjaman' => $peminjaman,
        ]);
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $data = $request->validate([
            'tanggal_kembali' => 'required|after_or_equal:' . $peminjaman->tanggal_pinjam,
            'keterangan' => 'nullable',
        ]);

        $peminjaman->update($data);

        return redirect()->route('peminjaman.show', $peminjaman)->with('success', 'Peminjaman berhasil diperbarui.');
    }
}
