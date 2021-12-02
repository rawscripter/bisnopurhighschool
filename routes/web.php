<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//routes for registration
Route::get('/', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/registration/{uuid}/success', [App\Http\Controllers\StudentController::class, 'success'])->name('register.success');

Route::get('/student/{uuid}/generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('student.generate-pdf');

// routes for districts
Route::get('/get-districts/{division}', [App\Http\Controllers\StudentController::class, 'getDistricts']);
Route::get('/get-thanas/{district}', [App\Http\Controllers\StudentController::class, 'getThanas']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
