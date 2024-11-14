<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnggotaController extends Controller
{
    public function index(): View
    {
        return view('pages.anggota', [
            'daftarAnggota' => Anggota::orderBy('kelas')->orderBy('nama')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nis' => 'required|numeric|unique:anggota',
            'nama' => 'required',
            'kelas' => 'required|in:X,XI,XII',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
        ]);

        Anggota::create($data);

        return redirect()->route('anggota')->with('success', 'Anggota <b>' . $data['nama'] . '</b> berhasil ditambahkan');
    }

    public function edit(Anggota $anggota): View
    {
        return view('pages.anggota-edit', [
            'anggota' => $anggota,
        ]);
    }

    public function update(Request $request, Anggota $anggota): RedirectResponse
    {
        $data = $request->validate([
            'nis' => 'required|numeric|unique:anggota,nis,' . $anggota->id,
            'nama' => 'required',
            'kelas' => 'required|in:X,XI,XII',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
        ]);

        $anggota->update($data);

        return redirect()->route('anggota')->with('success', 'Anggota <b>' . $anggota->nama . '</b> berhasil diperbarui');
    }

    public function destroy(Anggota $anggota): RedirectResponse
    {
        $anggota->delete();

        return redirect()->route('anggota')->with('success', 'Anggota <b>' . $anggota->nama . '</b> berhasil dihapus');
    }
}
