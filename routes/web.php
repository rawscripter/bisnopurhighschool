<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//routes for registration
Route::get('/', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');

// routes for districts
Route::get('/get-districts/{division}', [App\Http\Controllers\StudentController::class, 'getDistricts']);
Route::get('/get-thanas/{district}', [App\Http\Controllers\StudentController::class, 'getThanas']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
