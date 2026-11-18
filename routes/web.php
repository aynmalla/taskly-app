<?php

use App\Http\Controllers\PasangBaruController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cektagihan', function () {
    return view('cektagihan');
})->name('cektagihan');

Route::get('/tambahdaya', function () {
    return view('tambahdaya');
})->name('tambahdaya');
Route::get('/pasang-baru', [PasangBaruController::class, 'create'])->name('pasang-baru.create');
Route::post('/pasang-baru', [PasangBaruController::class, 'store'])->name('pasang-baru.store');
