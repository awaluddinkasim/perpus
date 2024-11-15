<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('pages.petugas', [
            'daftarPetugas' => User::where('role', 'petugas')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);
        $data['role'] = 'petugas';

        User::create($data);

        return redirect()->route('petugas')->with('success', 'Petugas <b>' . $data['nama'] . '</b> berhasil ditambahkan');
    }

    public function edit(User $petugas): View
    {
        return view('pages.petugas-edit', [
            'petugas' => $petugas,
        ]);
    }

    public function update(Request $request, User $petugas): RedirectResponse
    {
        $data = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'nullable',
        ]);

        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $petugas->update($data);

        return redirect()->route('petugas')->with('success', 'Petugas <b>' . $petugas->nama . '</b> berhasil diubah');
    }

    public function destroy(User $petugas): RedirectResponse
    {
        $petugas->delete();

        return redirect()->route('petugas')->with('success', 'Petugas <b>' . $petugas->nama . '</b> berhasil dihapus');
    }
}
