<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/berita', function () {
    return view('berita.berita');
});

Route::get('/detail', function () {
    return view('berita.detail');
});

Route::get('/login', function () {
    return view('auth.login');
});

