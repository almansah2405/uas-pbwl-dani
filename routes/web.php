<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jenissepatu', [App\Http\Controllers\jenissepatuController::class, 'index']);
Route::get('/jenissepatu/create', [App\Http\Controllers\jenissepatuController::class, 'create']);
Route::post('/jenissepatu', [App\Http\Controllers\jenissepatuController::class, 'store']);
Route::get('/jenissepatu/{id}/edit', [App\Http\Controllers\jenissepatuController::class, 'edit']);
Route::patch('/jenissepatu/{id}', [App\Http\Controllers\jenissepatuController::class, 'update']);
Route::delete('/jenissepatu/{id}', [App\Http\Controllers\jenissepatuController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sepatu', [App\Http\Controllers\sepatuController::class, 'index']);
Route::get('/sepatu/create', [App\Http\Controllers\sepatuController::class, 'create']);
Route::post('/sepatu', [App\Http\Controllers\sepatuController::class, 'store']);
Route::get('/sepatu/{id}/edit', [App\Http\Controllers\sepatuController::class, 'edit']);
Route::patch('/sepatu/{id}', [App\Http\Controllers\sepatuController::class, 'update']);
Route::delete('/sepatu/{id}', [App\Http\Controllers\sepatuController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\transaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\transaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\transaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\transaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'destroy']);