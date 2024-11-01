<?php

<<<<<<< HEAD
use App\Http\Controllers\DanhGiaController;
use App\Http\Controllers\PhanQuyenController;
=======
use App\Http\Controllers\DangTinController;
use App\Http\Controllers\PhuongThucThanhToanController;
use App\Http\Controllers\PlayerController;
>>>>>>> f5cce01946cc9845bd8f82804407435e36440fef
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

<<<<<<< HEAD
Route::get('/phan-quyens', [PhanQuyenController::class, 'index'])->name('phanquyen.index');
Route::get('/phan-quyens/create', [PhanQuyenController::class, 'create'])->name('phanquyen.create');
Route::post('/phan-quyens/store', [PhanQuyenController::class, 'store'])->name('phanquyen.store');
Route::get('/phan-quyens/edit/{id}', [PhanQuyenController::class, 'edit'])->name('phanquyen.edit');
Route::put('/phan-quyens/update/{id}', [PhanQuyenController::class, 'update'])->name('phanquyen.update');
Route::delete('/phan-quyens/{id}', [PhanQuyenController::class, 'destroy'])->name('phanquyen.destroy');


Route::get('danh-gias', [DanhGiaController::class, 'index'])->name('danhgia.index');
Route::get('/danh-gias/{id}', [DanhGiaController::class, 'getAverageRating'])->name('danhgia.show');
Route::post('/danh-gias/store', [DanhGiaController::class, 'store'])->name('danhgia.store');

=======
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
>>>>>>> f5cce01946cc9845bd8f82804407435e36440fef
