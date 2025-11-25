<?php

use App\Http\Controllers\pageController;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProyekController;

Route::middleware('auth')->group(function () {
    Route::resource('proyek', ProyekController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth', 'preventBackHistory'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});



// Hanya bisa diakses kalau BELUM login
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Hanya bisa diakses kalau SUDAH login
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    Route::get('/admin',[admin::class,'admin'])->name('user');
})->middleware('auth')->name('layouts/admin');

// Halaman utama mahasiswa
Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
});

Route::get('/', [pageController::class, 'home'] )->name('home');
Route::get('/home', [pageController::class, 'home'] )->name('home');
Route::get('/expo', [pageController::class, 'expo'] )->name('expo');
Route::get('/repository', [pageController::class, 'repository'] )->name('repository');
Route::get('/about', [pageController::class, 'about'] )->name('about');
Route::get('/contact', [pageController::class, 'contact'] )->name('contact');
Route::get('/userProyek', [pageController::class, 'userProyek'])->middleware('auth')->name('userProyek');
Route::get('/login', [pageController::class, 'login'] )->name('login');


Route::get('/admin', [admin::class, 'admin'] )->name('admin');
Route::get('/admin-dashboard', [admin::class, 'admin'] )->name('admin');
Route::get('/admin-kelolaAkun', [admin::class, 'kelolaAkun'] )->name('admin');
Route::get('/admin-kelola-proyek', [admin::class, 'kelolaProyek'] )->name('admin');
Route::get('/admin-vertifikasi', [admin::class, 'vertifikasi'] )->name('admin');
Route::get('/admin-kelolaDanPenilaian', [admin::class, 'kelolaDanPenilaian'] )->name('admin');
