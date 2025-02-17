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
})->name('index');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/roles-permissions', function () {
    return view('roles-permissions');
})->name('roles-permissions');

Route::get('/general-settings', function () {
    return view('general-settings');
})->name('general-settings');

Route::get('/security-settings', function () {
    return view('security-settings');
})->name('security-settings');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');






