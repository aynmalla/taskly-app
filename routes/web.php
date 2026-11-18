<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/cek-tagihan', 'cektagihan')->name('cektagihan');
