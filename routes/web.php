<?php

use Illuminate\Support\Facades\Route;

//route untuk halaman home (link "Home" di navbar mengarah ke "/")
Route::get('/', function () {
    // TODO: Backend akan mengirimkan variabel $posts
    $posts = []; // Placeholder - akan diganti dengan data dari backend
    return view('pages.home', compact('posts'));
});

//route untuk halaman home (alternatif path)
Route::get('/home', function () {
    // TODO: Backend akan mengirimkan variabel $posts
    $posts = []; // Placeholder - akan diganti dengan data dari backend
    return view('pages.home', compact('posts'));
});

//route baru untuk halaman about
Route::get('/about', function () {
    return view('pages.about');
});

//route untuk halaman post detail
Route::get('/post/{id}', function ($id) {
    // TODO: Backend akan mengirimkan variabel $post berdasarkan $id
    $post = null; // Placeholder - akan diganti dengan data dari backend
    return view('pages.post', compact('post'));
});

