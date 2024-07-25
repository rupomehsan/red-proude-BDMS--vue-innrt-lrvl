<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');


// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
