<?php

use Illuminate\Support\Facades\Route;
//ini route default yang sudah ada
Route::get('/', function () {
    return view('welcome');
});
//route baru untuk halaman about

