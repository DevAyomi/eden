<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

//Redirect Route here
Route::get('redirect', [LoginController::class, 'redirect'])->name('redirect');

//Login Routes Here
Route::get('/login', [LoginController::class, 'index'])->name('/login');
Route::post('/login', [LoginController::class, 'login'])->name('/login-check');

//Register Routes Here
Route::get('/register', [RegisterController::class, 'index'])->name('/register');
Route::post('/register', [RegisterController::class, 'store'])->name('/register-store');

//Logout Routes Here
Route::post('/logout', [LoginController::class, 'logout'])->name('/logout');

