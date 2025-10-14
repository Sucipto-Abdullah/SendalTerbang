<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/', [pageController::class, 'home'] )->name('home');
Route::get('/expo', [pageController::class, 'expo'] )->name('expo');
