<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});


Route::get('/email', function () {
    return view('auth.passwords.email');
})->name('email');

Route::middleware('guest')->group(function () {
    Route::get('/home', function () {
        return view('user.home');
    });
});

Route::post('register', [RegistrationController::class, 'store'])->name('register');
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route::post('email', [ResetPasswordController::class, 'email'])->name('email');




