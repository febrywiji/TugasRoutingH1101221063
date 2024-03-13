<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portal', function () {
    return view('portal');
});

// Route ke halaman Login
Route::get('/login', function () {
    return view('login');
});

// Route ke halaman Register
Route::get('/register', function () {
    return view('register');
});