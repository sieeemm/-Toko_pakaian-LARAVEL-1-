<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/kembali', function () {
    return view('welcome');
});
Route::get('/produk', function () {
    return view('produk');
});