<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

// =========================
//  ROUTE GUEST (BELUM LOGIN)
// =========================
Route::middleware('guest')->group(function () {

    // Halaman login (GET)
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

    // Proses login (POST)
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
});


// =========================
//  ROUTE AUTH (SUDAH LOGIN)
// =========================
Route::middleware('auth')->group(function () {

    // Halaman Dashboard (layout modern)
    Route::get('/dashboard', function () {
        return view('dashboard'); // opsional
    })->name('dashboard');

    // Halaman Profil User
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Semua user login boleh melihat daftar siswa
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

    // =========================
    //  ROUTE KHUSUS ADMIN
    // =========================
    Route::middleware('role:admin')->group(function () {

        Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
        Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

        Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
        Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');

        Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
    });
});
