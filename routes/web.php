<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController; // pastikan sesuai nama file controller kamu

Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
