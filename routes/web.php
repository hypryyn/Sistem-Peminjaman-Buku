<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SiswaController;

Route::resource('siswa', SiswaController::class);

use App\Http\Controllers\BukuController;

Route::resource('buku', BukuController::class);

use App\Http\Controllers\transaksiController;

Route::resource('transaksi', transaksiController::class);
Route::get('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'show'])->name('transaksi.show');

Route::get('/reports/pinjaman', [App\Http\Controllers\ReportController::class, 'reportPinjaman'])->name('reports.pinjaman');
Route::get('/reports/siswa', [App\Http\Controllers\ReportController::class, 'reportSiswa'])->name('reports.siswa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout-page', function () {
    return view('logout');
})->name('logout.page');

// Override the default logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('logout.page');
})->name('logout');