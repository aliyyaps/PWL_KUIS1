<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

<<<<<<< HEAD
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('home');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
>>>>>>> 884bc0bcb6e10f25468050502d1dd626a64c5ecd

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'pelanggan'])->name('pelanggan');

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'pegawai'])->name('pegawai');

Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'supplier'])->name('supplier');
