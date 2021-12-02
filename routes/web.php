<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//routes for registration
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
