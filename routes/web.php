<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\TeachersController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomePageController::class,"index"])->name('home_page');
Route::get('/students', [HomePageController::class,"index"])->name('students');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,"login"])->name('login');
//Route::get('/{students:slug}',[App\Http\Controllers\StudentsController::class,"get"])->name('students.open');

Route::middleware(['auth'])->group(function () {
  Route::get('/students/list', [StudentsController::class,"list"])->name('students.list');
  Route::get('/students/form', [StudentsController::class,"create"])->name('students.create');
  Route::post('/students', [StudentsController::class,"store"])->name('students.store');
  Route::get('/students/{students}', [StudentsController::class,"edit"])->name('students.edit');
  Route::put("/students/{students}", [StudentsController::class,"update"])->name('students.update');
  Route::delete('/students/{students}', [StudentsController::class,"destroy"])->name('students.destroy');
  
  Route::get('/employees/list', [EmployeesController::class,"list"])->name('employees.list');
  Route::get('/employees/form', [EmployeesController::class,"create"])->name('employees.create');
  Route::post('/employees', [EmployeesController::class,"store"])->name('employees.store');
  Route::get('/employees/{employees}', [EmployeesController::class,"edit"])->name('employees.edit');
  Route::put("/employees/{employees}", [EmployeesController::class,"update"])->name('employees.update');
  Route::delete('/employees/{employees}', [EmployeesController::class,"destroy"])->name('employees.destroy');

  Route::get('/teachers/list', [TeachersController::class,"list"])->name('teachers.list');
  Route::get('/teachers/form', [TeachersController::class,"create"])->name('teachers.create');
  Route::post('/teachers', [TeachersController::class,"store"])->name('teachers.store');
  Route::get('/teachers/{teachers}', [TeachersController::class,"edit"])->name('teachers.edit');
  Route::put("/teachers/{teachers}", [TeachersController::class,"update"])->name('teachers.update');
  Route::delete('/teachers/{teachers}', [TeachersController::class,"destroy"])->name('teachers.destroy');
});

Auth::routes();
