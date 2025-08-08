<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController; // Ganti dari LoginController ke AdminController

Route::get('/', [HomeController::class, 'home']);

Route::get('/administrator/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');
