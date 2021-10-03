<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('loginsuccess', function () {
    return view('loginsuccess');
});

Route::middleware('guest')->group(function () {
    Route::post('register', [RegistrationController::class, 'store'])->name('register');
    Route::post('login', [LoginController::class, 'store'])->name('login');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
