<?php

use App\Http\Controllers\Comments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\customValidation;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ResourceController;

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

/* Route::get('/', function () {
    return view('custom_validation');
}); */


// Route::post('/add', [UserController::class, 'addUser'])->name('addUser');
// Route::post('/custom_validation', [customValidation::class, 'custom_validation'])->name('custom_validation');



// ==============================================================
//Laravel Resource controller
// below will create 7 methods and their routes
Route::resource('users', ResourceController::class);
// ==============================================================

// ==============================================================
// below will create only specific methods
Route::resource('users', ResourceController::class)->only([
    'create' => 'update', 'show'
]);
// ==============================================================
// below will skipps only specific methods
Route::resource('users', ResourceController::class)->except([
    'create' => 'update', 'show'
]);
// ==============================================================


Route::resource('users', UserController::class);
Route::resource('users.comments', Comments::class);
