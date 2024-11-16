<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/master')->group(function () {
        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
        Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
        Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

        Route::get('/penerbit', [PenerbitController::class, 'index'])->name('penerbit');
        Route::post('/penerbit', [PenerbitController::class, 'store'])->name('penerbit.store');
        Route::delete('/penerbit/{penerbit}', [PenerbitController::class, 'destroy'])->name('penerbit.destroy');
    });

    Route::get('/buku', [BukuController::class, 'index'])->name('buku');
    Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('buku.destroy');

    Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
    Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
    Route::get('/anggota/{anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
    Route::put('/anggota/{anggota}', [AnggotaController::class, 'update'])->name('anggota.update');
    Route::delete('/anggota/{anggota}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');

    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
    Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::get('/peminjaman/{peminjaman}', [PeminjamanController::class, 'show'])->name('peminjaman.show');
    Route::put('/peminjaman/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman.update');

    Route::get('/petugas', [UserController::class, 'index'])->name('petugas');
    Route::post('/petugas', [UserController::class, 'store'])->name('petugas.store');
    Route::get('/petugas/{petugas}/edit', [UserController::class, 'edit'])->name('petugas.edit');
    Route::put('/petugas/{petugas}', [UserController::class, 'update'])->name('petugas.update');
    Route::delete('/petugas/{petugas}', [UserController::class, 'destroy'])->name('petugas.destroy');

    Route::get('/tentang', function () {
        return view('pages.tentang');
    })->name('tentang');

    Route::get('/akun', [AccountController::class, 'index'])->name('akun');
    Route::put('/akun', [AccountController::class, 'update'])->name('akun.update');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
