<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PeminjamanController extends Controller
{
    public function index(): View
    {
        return view('pages.peminjaman', [
            'daftarPeminjaman' => Peminjaman::orderBy('tanggal_pinjam', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'keterangan' => 'required',
            'petugas' => 'required',
        ]);

        Peminjaman::create($data);

        return redirect()->route('peminjaman')->with('success', 'Peminjaman berhasil disimpan.');
    }
}
