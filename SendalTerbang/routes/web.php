<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'home'] )->name('home');
Route::get('/expo', [pageController::class, 'expo'] )->name('expo');
Route::get('/about', [pageController::class, 'about'] )->name('about');
Route::get('/contact', [pageController::class, 'contact'] )->name('contact');

Route::get('/admin/{part}', [pageController::class, 'admin'] )->name('admin');
