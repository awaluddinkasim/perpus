<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{
    public function index(): View
    {
        return view('pages.akun');
    }

    public function update(Request $request): RedirectResponse
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

        auth()->user()->update($data);

        return redirect()->route('akun')->with('success', 'Update akun berhasil');
    }
}
