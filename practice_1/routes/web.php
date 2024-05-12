<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('students', StudentController::class);
// Route::resource('lecturers', LecturerController::class);

// Route::get('/union', [StudentController::class, 'unionData']);
// Route::get('/when', [StudentController::class, 'whenData']);
// Route::get('/chunk', [StudentController::class, 'chunkData']);



Route::get('/', [StudentController::class, 'showStudents']);
