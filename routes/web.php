<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AddEmployeeTableController;



Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/project', [PublicController::class, 'project'])->name('project');
Route::get('/project_employee', [PublicController::class, 'project_employee'])->name('project_employee');
Route::get('/employee_project', [PublicController::class, 'employee_project'])->name('employee_project');
