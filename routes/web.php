<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;

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

Route::get('/',[PagesController::class,'home'])->name('home');

//AUTH

Route::get('/login',[AuthController::class,'showLogin'])->name('login');
Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'postRegister'])->name('register');