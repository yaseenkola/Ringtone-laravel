<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\RingtoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });






Auth::routes([
    'register' => false
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::resource('/ringtones', RingtoneController::class)->middleware('auth');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('ringtones', RingtoneController::class);
});
