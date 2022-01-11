<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TpqController;

    //login Admin
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [UserController::class, 'beranda']);
    Route::get('beranda', [UserController::class, 'beranda']);
    Route::resource('user', UserController::class);

    Route::get('tpq', [TpqController::class, 'index']);
    Route::get('tpq/create', [TpqController::class, 'create']);
    Route::post('tpq/', [TpqController::class, 'store']);
    


});