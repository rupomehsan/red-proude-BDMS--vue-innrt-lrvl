<?php

use App\Modules\UserManagement\User\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('', [Controller::class,'index']);
        Route::get('{id}', [Controller::class,'show']);
        Route::post('store', [Controller::class,'store']);
        Route::post('update/{id}', [Controller::class,'update']);
        Route::post('soft-delete', [Controller::class,'softDelete']);
        Route::delete('destroy/{slug}', [Controller::class,'destroy']);
        Route::post('restore', [Controller::class,'restore']);
        Route::post('import', [Controller::class,'import']);
        Route::post('bulk-action', [Controller::class, 'bulkAction']);
    });
});
