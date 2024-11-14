<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard', [
            'kategori' => Kategori::count(),
            'penerbit' => Penerbit::count(),
            'buku' => Buku::count(),
            'anggota' => Anggota::count(),
        ]);
    }
}
