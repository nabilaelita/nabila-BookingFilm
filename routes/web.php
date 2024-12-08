<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CinemaController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman Home
Route::get('/home', function () {
    return view('home');
})->name('cinemas.home');

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Route untuk halaman register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Group route untuk Cinemas yang dilindungi oleh middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::resource('/cinemas', CinemaController::class);
});
