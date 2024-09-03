<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'homePage'])->name('home.index');
Route::get('/blood-register', [\App\Http\Controllers\FrontendController::class, 'registerPage'])->name('registerPage');
Route::get('/blood-doner-list', [\App\Http\Controllers\FrontendController::class, 'DonerListPage'])->name('DonerListPage');
Route::get('/blogs', [\App\Http\Controllers\FrontendController::class, 'BlogPage'])->name('BlogPage');


Route::get('/login', [\App\Http\Controllers\FrontendController::class, 'login'])->name('login.index');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
