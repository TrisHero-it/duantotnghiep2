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

Route::get('/phanquyens', [PhanQuyenController::class, 'index'])->name('phanquyens.index');
Route::get('/phanquyens/create', [PhanQuyenController::class, 'create'])->name('phanquyens.create');
Route::post('/phanquyens/store', [PhanQuyenController::class, 'store'])->name('phanquyens.store');
Route::get('/phanquyens/edit/{id}', [PhanQuyenController::class, 'edit'])->name('phanquyens.edit');
Route::put('/phanquyens/update/{id}', [PhanQuyenController::class, 'update'])->name('phanquyens.update');
Route::delete('/phanquyens/{id}', [PhanQuyenController::class, 'destroy'])->name('phanquyens.delete');
