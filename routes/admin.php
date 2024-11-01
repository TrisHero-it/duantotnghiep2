<?php

use App\Http\Controllers\DangTinController;
use App\Http\Controllers\PhuongThucThanhToanController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TaiKhoanController;
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
Route::get('/taikhoans', [TaiKhoanController::class, 'index'])->name('taikhoans.index');
Route::get('/taikhoans/create', [TaiKhoanController::class, 'create'])->name('taikhoans.create');
Route::post('/taikhoans/store', [TaiKhoanController::class, 'store'])->name('taikhoans.store');
Route::get('/taikhoans/show/{id}', [TaiKhoanController::class, 'show'])->name('taikhoans.show');
Route::post('/taikhoans/ban/{id}', [TaiKhoanController::class, 'banUser'])->name('taikhoans.ban');
Route::post('/taikhoans/unban/{id}', [TaiKhoanController::class, 'unbanUser'])->name('taikhoans.unban');



Route::get('/dangtins', [DangTinController::class, 'index'])->name('dangtins.index');
Route::get('/dangtins/create', [DangTinController::class, 'create'])->name('dangtins.create');
Route::post('/dangtins', [DangTinController::class, 'store'])->name('dangtins.store');
Route::delete('/dangtins/{id}', [DangTinController::class, 'store'])->name('dangtins.destroy');

Route::get('/phuongthucthanhtoans', [PhuongThucThanhToanController::class, 'index'])->name('phuongthucthanhtoans.index');
Route::get('/phuongthucthanhtoans/create', [PhuongThucThanhToanController::class, 'create'])->name('phuongthucthanhtoans.create');
Route::post('/phuongthucthanhtoans', [PhuongThucThanhToanController::class, 'store'])->name('phuongthucthanhtoans.store');
Route::get('/phuongthucthanhtoans/{id}/edit', [PhuongThucThanhToanController::class, 'edit'])->name('phuongthucthanhtoans.edit');
Route::put('/phuongthucthanhtoans/{id}', [PhuongThucThanhToanController::class, 'update'])->name('phuongthucthanhtoans.update');
Route::put('/phuongthucthanhtoans/{id}/update-status', [PhuongThucThanhToanController::class, 'updateStatus'])->name('phuongthucthanhtoans.update-status');
Route::delete('/phuongthucthanhtoans/{id}', [PhuongThucThanhToanController::class, 'destroy'])->name('phuongthucthanhtoans.destroy');

Route::resource('players', PlayerController::class);
