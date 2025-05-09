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

Route::get('/', function () {
    return view('index');
})->middleware('auth');
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/logout', function () {
    return view('auth.logout');
});
Route::get('/reset_password', function () {
    return view('auth.reset_password');
});
Route::get('/verification_code', function () {
    return view('auth.verification_code');
});
Route::get('/change_password', function () {
    return view('auth.change_password');
});
Route::get('/lock_screen', function () {
    return view('auth.lock_screen');
});
