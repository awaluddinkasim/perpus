<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    public function index(): View
    {
        return view('pages.buku', [
            'daftarBuku' => Buku::orderBy('judul')->get(),
            'daftarKategori' => Kategori::orderBy('nama')->get(),
            'daftarPenerbit' => Penerbit::orderBy('nama')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'isbn' => 'required|unique:buku',
            'judul' => 'required|unique:buku',
            'pengarang' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'tahun' => 'required|digits:4',
            'jumlah_halaman' => 'required|numeric',
        ]);

        Buku::create($data);

        return redirect()->route('buku')->with('success', 'Buku <b>' . $data['judul'] . '</b> berhasil ditambahkan');
    }

    public function edit(Buku $buku): View
    {
        return view('pages.buku-edit', [
            'buku' => $buku,
            'daftarKategori' => Kategori::orderBy('nama')->get(),
            'daftarPenerbit' => Penerbit::orderBy('nama')->get(),
        ]);
    }

    public function update(Request $request, Buku $buku): RedirectResponse
    {
        $data = $request->validate([
            'isbn' => 'required|unique:buku,isbn,' . $buku->id,
            'judul' => 'required|unique:buku,judul,' . $buku->id,
            'pengarang' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'tahun' => 'required|digits:4',
            'jumlah_halaman' => 'required|numeric',
        ]);

        $buku->update($data);

        return redirect()->route('buku')->with('success', 'Buku <b>' . $data['judul'] . '</b> berhasil diubah');
    }

    public function destroy(Request $request, Buku $buku): RedirectResponse
    {
        $buku->delete();

        return redirect()->route('buku')->with('success', 'Buku <b>' . $buku->judul . '</b> berhasil dihapus');
    }
}
