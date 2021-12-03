<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//routes for registration
Route::get('/', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/registration/{uuid}/success', [App\Http\Controllers\StudentController::class, 'success'])->name('register.success');

Route::get('/student/{uuid}/generate-pdf', [App\Http\Controllers\PDFController::class, 'download'])->name('student.generate-pdf');

// routes for districts
Route::get('/get-districts/{division}', [App\Http\Controllers\StudentController::class, 'getDistricts']);
Route::get('/get-thanas/{district}', [App\Http\Controllers\StudentController::class, 'getThanas']);

Auth::routes();


// middle ware group for admin

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
    Route::get('/students', [App\Http\Controllers\AdminController::class, 'students'])->name('students');
    Route::get('/student/{uuid}/approve', [App\Http\Controllers\StudentController::class, 'approve'])->name('student.approve');
    Route::get('/student/{uuid}/reject', [App\Http\Controllers\StudentController::class, 'reject'])->name('student.reject');
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('home');
    Route::get('/student/{uuid}/pdf/view', [App\Http\Controllers\PDFController::class, 'view'])->name('pdf.view');
    Route::get('/student/{uuid}/pdf/download', [App\Http\Controllers\PDFController::class, 'download'])->name('pdf.download');
});
//
