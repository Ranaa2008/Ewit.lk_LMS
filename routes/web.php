<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TeacherCRUDcontroller;
use App\Http\Controllers\StudentCRUDcontroller;

Route::get('/', [RouteController::class, 'welcome'])->name('welcome');
Route::get('/login', [RouteController::class, 'login'])->name('login');
Route::get('/index', [RouteController::class, 'index'])->name('index');
Route::get('/register/teacher', [TeacherCRUDcontroller::class,  'create'])->name('teacher.register');
Route::get('/register/student', [StudentCRUDcontroller::class,  'create'])->name('student.register');

Route::post('/register/student', [StudentCRUDcontroller::class,  'store'])->name('student.store');
Route::post('/register/teacher', [TeacherCRUDcontroller::class,  'store'])->name('teacher.store');
