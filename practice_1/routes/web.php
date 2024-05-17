<?php

use App\Http\Controllers\customValidation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



// Route::get('/', [StudentController::class, 'showStudents']);


/* Route::get('/', function () {
    return view('addUser');
}); */

Route::get('/', function () {
    return view('custom_validation');
});


// Route::post('/add', [UserController::class, 'addUser'])->name('addUser');
Route::post('/custom_validation', [customValidation::class, 'custom_validation'])->name('custom_validation');
