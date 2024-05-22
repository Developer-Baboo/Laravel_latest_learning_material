<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentRoleController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('student', StudentController::class);
Route::resource('contact', ContactController::class);

Route::get('/show1', [App\Http\Controllers\StudentController::class, 'show1']);
Route::resource('book', BookController::class);




Route::get('/show123', [App\Http\Controllers\StudentController::class, 'show123']);
Route::resource('role', RoleController::class);
Route::resource('student__roles', StudentRoleController::class);
