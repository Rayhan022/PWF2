<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/inputpelanggan', function () {
    return view('inputpelanggan');
});

Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/inputpelanggan', [PelangganController::class, 'create'])->name('inputpelanggan.create');
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');

Route::get('/inputproduk', function () {
    return view('inputproduk');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/inputproduk', [ProdukController::class, 'create'])->name('inputproduk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

