<?php

use App\Http\Controllers\generalController;
use Illuminate\Support\Facades\Route;


Route::controller(generalController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
    
    Route::controller(generalController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

});
