<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

Route::controller(UserController::class)->group(function() {
    Route::get('/', 'loginPage');
    Route::post('/user-register', 'userResgister')->name('user-register');
    Route::post('/user-login', 'userLogin')->name('user-login');
    Route::get('/home-page', 'homePage');
    Route::post('/user-update', 'userUpdate')->name('user-update');
    Route::get('/log-out', 'logout')->name('log-out');
});
