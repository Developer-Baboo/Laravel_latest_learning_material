<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('students', StudentController::class);
// Route::resource('lecturers', LecturerController::class);

Route::get('/union', [StudentController::class, 'unionData']);
