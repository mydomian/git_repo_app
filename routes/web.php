<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', 'login')->name('login');
Route::get('/auth/redirect',[AuthController::class,'redirect'])->name('auth.redirect');
Route::get('/auth/callback',[AuthController::class,'login']);

Route::group(['middleware' => 'checkLogin',], function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});



