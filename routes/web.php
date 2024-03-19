<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class,'index'])->name('viewLogin');
Route::post('/login', [LoginController::class,'authenticate'])->name('login');

Route::get('/register', [LoginController::class,'register']);
Route::post('/register', [LoginController::class,'storeRegister']);

Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
        Route::get('/biodata', [BiodataController::class,'index'])->name('viewBiodata');
        Route::get('/tambah-biodata', [BiodataController::class,'tambahBiodata'])->name('viewBiodata');
        Route::post('/tambah-biodata', [BiodataController::class,'store'])->name('storeBiodata');
    });

    Route::middleware('role:user')->group(function () {    
        Route::get('/home', [HomeController::class,'index'])->name('home');
    });
    
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');
    Route::get('/unauthorized', [UserController::class,'unauthorized']);
});


