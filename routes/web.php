<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
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

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'Dashboard'])->name('dashboard');
    return view('/');
  });
//dashboard
//Route::get('/', [DashboardController::class, 'Dashboard'])->middleware('auth');
//register
Route::get('/register', [RegisterController::class, 'Register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'postRegister']);

//login
Route::get('/login', [LoginController::class, 'Login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postLogin']);
//logout
Route::post('/logout', [LoginController::class, 'postLogout'])->middleware('auth');
