<?php

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
Route::get('/taikhoans/edit/{id}', [TaiKhoanController::class, 'edit'])->name('taikhoans.edit');
Route::put('/taikhoans/update/{id}', [TaiKhoanController::class, 'update'])->name('taikhoans.update');
Route::delete('/taikhoans/{id}', [TaiKhoanController::class, 'destroy'])->name('taikhoans.delete');
