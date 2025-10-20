<?php

use App\Http\Controllers\pageController;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;

Route::get('/', [pageController::class, 'home'] )->name('home');
Route::get('/expo', [pageController::class, 'expo'] )->name('expo');
Route::get('/about', [pageController::class, 'about'] )->name('about');
Route::get('/contact', [pageController::class, 'contact'] )->name('contact');

Route::get('/admin', [admin::class, 'admin'] )->name('admin');
Route::get('/admin-dashboard', [admin::class, 'admin'] )->name('admin');
Route::get('/admin-kelolaAkun', [admin::class, 'kelolaAkun'] )->name('admin');
Route::get('/admin-kelola-proyek', [admin::class, 'kelolaProyek'] )->name('admin');
Route::get('/admin-vertifikasi', [admin::class, 'vertifikasi'] )->name('admin');
Route::get('/admin-kelolaDanPenilaian', [admin::class, 'kelolaDanPenilaian'] )->name('admin');
