<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonversiController;

// use App\Http\Controllers\UserController;

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

Route::get('/', [KonversiController::class, 'index']);
Route::post('/konversi', [KonversiController::class, 'konversi']);
Route::get('/konversi', [KonversiController::class, 'index']);

// Route::get('/user', [UserController::class, 'index']);
