<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies')->middleware('auth');
Route::get('/companies/create', [CompanyController::class, 'create'])->middleware('auth');
Route::post('/companies/create', [CompanyController::class, 'store'])->middleware('auth');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies')->middleware('auth');
Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->name('companies')->middleware('auth');
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies')->middleware('auth');
Route::patch('/companies/{company}/edit', [CompanyController::class, 'update'])->name('companies')->middleware('auth');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees')->middleware('auth');
Route::get('/employees/create', [EmployeeController::class, 'create'])->middleware('auth');
Route::post('/employees/create', [EmployeeController::class, 'store'])->middleware('auth');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees')->middleware('auth');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees')->middleware('auth');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees')->middleware('auth');
Route::patch('/employees/{employee}/edit', [EmployeeController::class, 'update'])->name('employees')->middleware('auth');
Route::patch('/employees/{employee}/unemploy', [EmployeeController::class, 'unemploy'])->name('employees')->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');