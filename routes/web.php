<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome', [
        'title' => 'Dashboard'
    ]);
});


//register
Route::get('/register', [RegisterController::class, 'Register']);
Route::post('/register', [RegisterController::class, 'postRegister']);

//login
Route::get('/login', [LoginController::class, 'Login']);
Route::post('/login', [LoginController::class, 'postLogin']);