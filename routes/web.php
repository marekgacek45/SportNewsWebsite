<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;

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
//PAGES
Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/news/{id}', [PagesController::class, 'news'])->name('news');


//AUTH
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login')->middleware('guest');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


//ADMIN
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');

    //NEWSES
    Route::group(['prefix' => 'newses'], function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin.newses');

        Route::get('/create', [NewsController::class, 'create'])->name('admin.newses.create');
        Route::post('/create', [NewsController::class, 'store'])->name('admin.store');
    });

    //CATEGORIES
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
        Route::post('/create', [CategoryController::class, 'store'])->name('admin.category.store');


    });

});