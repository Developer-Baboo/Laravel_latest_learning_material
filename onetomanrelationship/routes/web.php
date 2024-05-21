<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('student', StudentController::class);
Route::resource('contact', ContactController::class);

Route::get('/show1', [App\Http\Controllers\StudentController::class, 'show1']);
Route::resource('book', BookController::class);
