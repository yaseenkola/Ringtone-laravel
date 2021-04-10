<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\RingtoneController;



Auth::routes([
    'register' => false
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::resource('/ringtones', RingtoneController::class)->middleware('auth');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('ringtones', RingtoneController::class);
});
