<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController; // Ganti dari LoginController ke AdminController

Route::get('/', [HomeController::class, 'home']);
Route::get('/administrator/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/administrator/auth', [AdminController::class, 'authenticate'])->name('admin.auth');
Route::post('/administrator/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/administrator/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');
