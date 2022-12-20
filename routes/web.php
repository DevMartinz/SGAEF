<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\StudentsController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomePageController::class,"index"])->name('home_page');
Route::get('/students', [HomePageController::class,"index"])->name('students');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,"login"])->name('login');
Route::get('/{students:slug}',[App\Http\Controllers\StudentsController::class,"get"])->name('students.open');

Route::middleware(['auth'])->group(function () {
  Route::get('/students/list', [StudentsController::class,"list"])->name('students.list');
  Route::get('/students/form', [StudentsController::class,"create"])->name('students.create');
  Route::post('/students', [StudentsController::class,"store"])->name('students.store');
  Route::get('/students/{students}', [StudentsController::class,"edit"])->name('students.edit');
  Route::put("/students/{students}", [StudentsController::class,"update"])->name('students.update');
  Route::delete('/students/{students}', [StudentsController::class,"destroy"])->name('students.destroy');
});

Auth::routes();
