<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
    public function index(): View
    {
        return view('pages.kategori', [
            'daftarKategori' => Kategori::orderBy('nama')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'kode' => 'required|unique:kategori',
            'nama' => 'required',
        ]);

        Kategori::create($data);

        return redirect()->route('kategori')->with('success', 'Kategori <b>' . $data['nama'] . '</b> berhasil ditambahkan');
    }

    public function destroy(Kategori $kategori): RedirectResponse
    {
        $kategori->delete();

        return redirect()->route('kategori')->with('success', 'Kategori <b>' . $kategori->nama . '</b> berhasil dihapus');
    }
}
