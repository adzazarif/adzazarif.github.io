<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [UserController::class,'index'])->name('viewUser');
Route::get('/detail-user/{name}/{email}/{address}', [UserController::class,'getDetail'])->name('getDetail');
Route::post('/users', [UserController::class,'store'])->name('store');

Route::get('/dashboard', [DashboardController::class,'index']);


