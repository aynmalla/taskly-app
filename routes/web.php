<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cektagihan', function () {
    return view('cektagihan');
})->name('cektagihan');
