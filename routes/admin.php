<?php

use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\DanhMucController;
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
    return view('admin.layouts.app');
});

Route::get('/danhmucs', [DanhMucController::class, 'index'])->name('danhmucs.index');
Route::get('/danhmucs/create', [DanhMucController::class, 'create'])->name('danhmucs.create');
Route::post('/danhmucs/store', [DanhMucController::class, 'store'])->name('danhmucs.store');
Route::get('/danhmucs/{id}/edit', [DanhMucController::class, 'edit'])->name('danhmucs.edit');
Route::put('/danhmucs/{id}', [DanhMucController::class, 'update'])->name('danhmucs.update');
Route::put('/danhmucs/{id}/update-status', [DanhMucController::class, 'updateStatus'])->name('danhmucs.update-status');
Route::delete('/danhmucs/{id}', [DanhMucController::class, 'destroy'])->name('danhmucs.destroy');


Route::get('/binhluans', [BinhLuanController::class, 'index'])->name('binhluans.index');
Route::get('/binhluans/create', [BinhLuanController::class, 'create'])->name('binhluans.create');
Route::post('/binhluans/store', [BinhLuanController::class, 'store'])->name('binhluans.store');
Route::get('/binhluans/{id}/edit', [BinhLuanController::class, 'edit'])->name('binhluans.edit');
Route::put('/binhluans/{id}', [BinhLuanController::class, 'update'])->name('binhluans.update');
Route::put('/binhluans/{id}/update-status', [BinhLuanController::class, 'updateStatus'])->name('binhluans.update-status');
Route::delete('/binhluans/{id}', [BinhLuanController::class, 'destroy'])->name('binhluans.destroy');
