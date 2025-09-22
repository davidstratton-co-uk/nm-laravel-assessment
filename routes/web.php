<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyController::class, 'index']);
Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/employees', [EmployeeController::class, 'index']);
