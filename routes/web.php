<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\SecretariesController;
use App\Http\Controllers\Admin\PrincipalsController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomePageController::class,"index"])->name('home_page');
Route::get('/students', [HomePageController::class,"index"])->name('students');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,"login"])->name('login');
//Route::get('/{students:slug}',[App\Http\Controllers\StudentsController::class,"get"])->name('students.open');

Route::middleware(['auth'])->group(function () {
  Route::get('/students/home', [StudentsController::class,"home"])->name('students.home');
  Route::get('/students/school_grades', [StudentsController::class,"school_grades"])->name('students.school_grades');
  Route::get('/students/missing_school', [StudentsController::class,"missing_school"])->name('students.missing_school');
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

  Route::get('/teachers/home', [TeachersController::class,"home"])->name('teachers.home');
  Route::get('/teachers/missing_school', [TeachersController::class,"missing_school"])->name('teachers.missing_school');
  Route::get('/teachers/school_subject', [TeachersController::class,"school_subject"])->name('teachers.school_subject');
  Route::get('/teachers/grades', [TeachersController::class,"grades"])->name('teachers.grades');
  Route::get('/teachers/list', [TeachersController::class,"list"])->name('teachers.list');
  Route::get('/teachers/form', [TeachersController::class,"create"])->name('teachers.create');
  Route::post('/teachers', [TeachersController::class,"store"])->name('teachers.store');
  Route::get('/teachers/{teachers}', [TeachersController::class,"edit"])->name('teachers.edit');
  Route::put("/teachers/{teachers}", [TeachersController::class,"update"])->name('teachers.update');
  Route::delete('/teachers/{teachers}', [TeachersController::class,"destroy"])->name('teachers.destroy');

  Route::get('/secretaries/home', [SecretariesController::class,"home"])->name('secretaries.home');
  Route::get('/secretaries/service_call', [SecretariesController::class,"service_call"])->name('secretaries.service_call');
  Route::get('/secretaries/classes', [SecretariesController::class,"classes"])->name('secretaries.classes');
  Route::get('/secretaries/members', [SecretariesController::class,"members"])->name('secretaries.members'); 
  Route::get('/secretaries/list', [SecretariesController::class,"list"])->name('secretaries.list');
  Route::get('/secretaries/form', [SecretariesController::class,"create"])->name('secretaries.create');
  Route::post('/secretaries', [SecretariesController::class,"store"])->name('secretaries.store');
  Route::get('/secretaries/{secretaries}', [SecretariesController::class,"edit"])->name('secretaries.edit');
  Route::put("/secretaries/{secretaries}", [SecretariesController::class,"update"])->name('secretaries.update');
  Route::delete('/secretaries/{secretaries}', [SecretariesController::class,"destroy"])->name('secretaries.destroy');

  Route::get('/principals/home', [PrincipalsController::class,"home"])->name('principals.home');
  Route::get('/principals/service_call', [PrincipalsController::class,"service_call"])->name('principals.service_call');
  Route::get('/principals/classes', [PrincipalsController::class,"classes"])->name('principals.classes');
  Route::get('/principals/members', [PrincipalsController::class,"members"])->name('principals.members');
  Route::get('/principals/list', [PrincipalsController::class,"list"])->name('principals.list');
  Route::get('/principals/form', [PrincipalsController::class,"create"])->name('principals.create');
  Route::post('/principals', [PrincipalsController::class,"store"])->name('principals.store');
  Route::get('/principals/{principals}', [PrincipalsController::class,"edit"])->name('principals.edit');
  Route::put("/principals/{principals}", [PrincipalsController::class,"update"])->name('principals.update');
  Route::delete('/principals/{principals}', [PrincipalsController::class,"destroy"])->name('principals.destroy');
});

Auth::routes();
