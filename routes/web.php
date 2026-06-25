<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/manfaat', function () {
    return view('manfaat');
});
Route::get('/kontak', function () {
    return view('kontak');
});