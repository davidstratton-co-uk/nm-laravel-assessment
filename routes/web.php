<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [SessionController::class, 'create'])->name('login');

Route::get('/companies', [CompanyController::class, 'index'])->middleware('auth');
Route::get('/companies/create', [CompanyController::class, 'create'])->middleware('auth');
Route::post('/companies/create', [CompanyController::class, 'store'])->middleware('auth');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->middleware('auth');
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->middleware('auth');
Route::patch('/companies/{company}/edit', [CompanyController::class, 'update'])->middleware('auth');
Route::delete('/companies/{company}/del', [CompanyController::class, 'destroy'])->middleware('auth');

Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth');
Route::get('/employees/create', [EmployeeController::class, 'create'])->middleware('auth');
Route::post('/employees/create', [EmployeeController::class, 'store'])->middleware('auth');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->middleware('auth');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->middleware('auth');
Route::patch('/employees/{employee}edit', [EmployeeController::class, 'update'])->middleware('auth');
Route::delete('/employees/{employee}/del', [EmployeeController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');