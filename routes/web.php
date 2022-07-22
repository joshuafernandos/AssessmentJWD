<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;
use App\Models\Category;
use Illuminate\Routing\Router;

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

// public
Route::get('/', [PublicController::class, 'index']);
Route::get('/category/{category:slug}', [PublicController::class, 'show'])->middleware('auth');
Route::get('/login', [PublicController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [PublicController::class, 'register'])->middleware('guest');
Route::get('/invoice', [PublicController::class, 'invoice'])->middleware('auth');

// order
Route::post('/order', [OrderController::class, 'store']);

// regist
Route::post('/regist', [RegisterController::class, 'store']);

// login
Route::post('/log', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);