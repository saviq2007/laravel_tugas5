<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Rute untuk autentikasi
Auth::routes();

// Rute untuk halaman utama setelah login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
