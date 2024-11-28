<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('/buku', BukuController::class);
Route::resource('/Kategori', KategoriController::class);


Route::controller(PeminjamanController::class)->group(function () {
    Route::post('/peminjaman/{id}', 'peminjaman')->name('peminjaman');
    Route::get('/permintaan', 'permintaan')->name('permintaan');
    Route::get('/semua-peminjaman', 'allpeminjaman')->name('allpeminjaman');
    Route::post('/manualpeminjaman', 'manualpeminjaman')->name('manualpeminjaman');
    Route::get('/formpinjaman', 'formpinjaman')->name('formpinjaman');
});

Route::get('/peminjaman/generate', [GenerateController::class, 'peminjamanPdf'])->name('peminjaman.generate');
Route::get('/pengmembalian/generate', [GenerateController::class, 'pengembalianPdf'])->name('pengembalian.generate');



Route::controller(PengembalianController::class)->group(function () {
    Route::get('/pengembalian/create',  'create')->name('pengembalian.create');
    Route::post('/pengembalian/store', 'store')->name('pengembalian.store');
    Route::get('/allpengembalian', 'allpengembalian')->name('pengembalian.all');

});
