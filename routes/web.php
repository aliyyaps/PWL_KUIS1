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

Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('home');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'pelanggan'])->name('pelanggan');

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'pegawai'])->name('pegawai');

Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'supplier'])->name('supplier');
