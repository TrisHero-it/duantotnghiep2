<?php

use App\Http\Controllers\PhanQuyenController;
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
    return view('admin.layout.app');
});

Route::get('/phan-quyens', [PhanQuyenController::class, 'index'])->name('phanquyen.index');
Route::get('/phan-quyens/create', [PhanQuyenController::class, 'create'])->name('phanquyen.create');
Route::post('/phan-quyens/store', [PhanQuyenController::class, 'store'])->name('phanquyen.store');
Route::get('/phan-quyens/edit/{id}', [PhanQuyenController::class, 'edit'])->name('phanquyen.edit');
Route::put('/phan-quyens/update/{id}', [PhanQuyenController::class, 'update'])->name('phanquyen.update');
