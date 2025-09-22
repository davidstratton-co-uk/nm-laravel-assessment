<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [SessionController::class, 'create']);

Route::get('/companies', [CompanyController::class, 'index'])->middleware('auth');
Route::get('/companies/{company:id}', [CompanyController::class, 'show'])->middleware('auth');
Route::get('/companies/create', [CompanyController::class, 'create'])->middleware('auth');
Route::post('/companies/create', [CompanyController::class, 'store'])->middleware('auth');
Route::get('/companies/{company:id}/edit', [CompanyController::class, 'edit'])->middleware('auth');
Route::post('/companies/{company:id}/edit', [CompanyController::class, 'update'])->middleware('auth');
Route::post('/companies/{company:id}/del', [CompanyController::class, 'destroy'])->middleware('auth');

Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth');
Route::get('/employees/{employee:id}', [EmployeeController::class, 'show'])->middleware('auth');
Route::get('/employees/create', [EmployeeController::class, 'create'])->middleware('auth');
Route::post('/employees/create', [EmployeeController::class, 'store'])->middleware('auth');
Route::get('/employees/{employee:id}/edit', [EmployeeController::class, 'edit'])->middleware('auth');
Route::post('/employees/{employee:id}/edit', [EmployeeController::class, 'update'])->middleware('auth');
Route::post('/employees/{employee:id}/del', [EmployeeController::class, 'destroy'])->middleware('auth');

// Route::get('/register', [RegisteredUserController::class, 'create']);
// Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');