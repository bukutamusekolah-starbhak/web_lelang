<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BarangController;

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
//petugas
Route::get('/petugas.index', [PetugasController::class, 'index']);

//barang
Route::get('/barang.index', [BarangController::class, 'index']);
Route::get('/barang.create',[BarangController::class, 'create'])->name('create');
Route::post('simpan_barang',[BarangController::class, 'simpan_barang'])->name('simpan_barang');
Route::delete('delete_barang{id}',[BarangController::class, 'delete']);
Route::get('/edit_barang{id}',[BarangController::class, 'edit'])->name('edit_barang');
Route::post('update_barang{id}',[BarangController::class, 'update'])->name('update_barang');