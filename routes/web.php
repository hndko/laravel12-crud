<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('index');
    Route::get('create', [MahasiswaController::class, 'create'])->name('create');
    Route::post('store', [MahasiswaController::class, 'store'])->name('store');
    Route::get('{id}', [MahasiswaController::class, 'show'])->name('show');
    Route::get('{id}/edit', [MahasiswaController::class, 'edit'])->name('edit');
    Route::put('{id}', [MahasiswaController::class, 'update'])->name('update');
    Route::delete('{id}', [MahasiswaController::class, 'destroy'])->name('destroy');
});
