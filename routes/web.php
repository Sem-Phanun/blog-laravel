<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SportController;
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

Route::get('/', function(){
    return view('index');
});
Route::get('/food', [FoodController::class, 'foods'])->name('food');

Route::get('/destination', [DestinationController::class, 'destinations'])->name('destination');


Route::get('/sport', [SportController::class, 'sports'])->name('sport');

// user register route
Route::get('/register', [RegisterController::class, 'registers'])->name('register');
Route::post('/register', [RegisterController::class, 'createRegister']);


//login route
Route::get('/login', [LoginController::class, 'logins'])->name('login');
Route::post('/login', [LoginController::class, 'createLogin']);

//logout route
Route::get('/logout', [LogoutController::class, 'handleLogout'])->name('logout');