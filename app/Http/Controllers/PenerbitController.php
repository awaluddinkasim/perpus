<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PenerbitController extends Controller
{
    public function index(): View
    {
        return view('pages.penerbit', [
            'daftarPenerbit' => Penerbit::orderBy('nama')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama' => 'required|unique:penerbit',
        ]);

        Penerbit::create($data);

        return redirect()->route('penerbit')->with('success', 'Penerbit <b>' . $data['nama'] . '</b> berhasil ditambahkan');
    }

    public function destroy(Penerbit $penerbit): RedirectResponse
    {
        $penerbit->delete();

        return redirect()->route('penerbit')->with('success', 'Penerbit <b>' . $penerbit->nama . '</b> berhasil dihapus');
    }
}
