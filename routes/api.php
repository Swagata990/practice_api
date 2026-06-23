<?php

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\AcademicClassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ResultController;
use App\Http\Controllers\Api\FeeController;
use App\Http\Controllers\Api\AdmissionController;
use App\Http\Controllers\Api\AcademicSessionController;
use App\Http\Controllers\Api\AcademicStandardController;
use App\Http\Controllers\Api\StudentSessionController;






Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
// Route::post('/login', [UserController::class, 'login']);


Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::put('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);


//Route::post('/login', [AuthController::class, 'login']);
//Route::get('/profile', [AuthController::class, 'profile']);
//Route::post('/logout', [AuthController::class, 'logout']);

Route::prefix('auth')->group(function () {
    //Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware(['jwt.cookie', 'jwt.auth'])->group(function () {
        Route::get('/profile', [AuthController::class, 'profile']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});


Route::get('/teachers', [TeacherController::class, 'index']);
Route::post('/teachers', [TeacherController::class, 'store']);
Route::get('/teachers/{id}', [TeacherController::class, 'show']);
Route::put('/teachers/{id}', [TeacherController::class, 'update']);
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);

Route::get('/academic_classes', [AcademicClassController::class, 'index']);
Route::post('/academic_classes', [AcademicClassController::class, 'store']);
Route::get('/academic_classes/{id}', [AcademicClassController::class, 'show']);
Route::put('/academic_classes/{id}', [AcademicClassController::class, 'update']);
Route::delete('/academic_classes/{id}', [AcademicClassController::class, 'destroy']);

Route::get('/subjects', [SubjectController::class, 'index']);
Route::post('/subjects', [SubjectController::class, 'store']);
Route::get('/subjects/{id}', [SubjectController::class, 'show']);
Route::put('/subjects/{id}', [SubjectController::class, 'update']);
Route::delete('/subjects/{id}', [SubjectController::class, 'destroy']);


Route::get('/exams', [ExamController::class, 'index']);
Route::post('/exams', [ExamController::class, 'store']);
Route::get('/exams/{id}', [ExamController::class, 'show']);
Route::put('/exams/{id}', [ExamController::class, 'update']);
Route::delete('/exams/{id}', [ExamController::class, 'destroy']);


Route::get('/results', [ResultController::class, 'index']);
Route::post('/results', [ResultController::class, 'store']);
Route::get('/results/{id}', [ResultController::class, 'show']);
Route::put('/results/{id}', [ResultController::class, 'update']);
Route::delete('/results/{id}', [ResultController::class, 'destroy']);


Route::get('/fees', [FeeController::class, 'index']);
Route::post('/fees', [FeeController::class, 'store']);
Route::get('/fees/{id}', [FeeController::class, 'show']);
Route::put('/fees/{id}', [FeeController::class, 'update']);
Route::delete('/fees/{id}', [FeeController::class, 'destroy']);


Route::get('/admissions', [AdmissionController::class, 'index']);
Route::post('/admissions', [AdmissionController::class, 'store']);
Route::get('/admissions/{id}', [AdmissionController::class, 'show']);
Route::put('/admissions/{id}', [AdmissionController::class, 'update']);
Route::delete('/admissions/{id}', [AdmissionController::class, 'destroy']);


Route::get('/academic_sessions', [AcademicSessionController::class, 'index']);

Route::get('/academic_standards', [AcademicStandardController::class, 'index']);

Route::get('/student_sessions', [StudentSessionController::class, 'index']);






