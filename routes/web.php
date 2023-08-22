<?php

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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('authorized/google', [\App\Http\Controllers\LoginWithGoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('authorized/google/callback', [\App\Http\Controllers\LoginWithGoogleController::class, 'handleGoogleCallback']);
