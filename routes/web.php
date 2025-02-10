<?php

use App\Http\Controllers\generalController;
use Illuminate\Support\Facades\Route;


Route::controller(generalController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/home', 'home')->name('home');
    Route::get('/setdashboard', 'setDashboard')->name('setDashboard');
    Route::get('/dashboard', 'setDashboard')->name('dashboard');
});

Route::prefix('dashboard')->middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
    
    Route::controller(generalController::class)->group(function () {
        Route::get('/general', 'generalDashboard')->name('generalDashboard');
    });

});
