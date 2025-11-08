<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PostController; // <-- PASTIKAN INI ADA

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// === RUTE PROJECT UTS (SOAL 1) ===

// Rute Home (Beranda) -> Memanggil PostController
Route::get('/', [PostController::class, 'home']);

// Rute Halaman Detail Post -> Memanggil PostController
Route::get('/post/{id}', [PostController::class, 'show']);

// Rute Halaman About (Statis)
Route::get('/about', function () {
    return view('pages.about'); 
});

