<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\StudentsController;

Route::get('/', [HomePageController::class,"index"])->name('home_page');
Route::get('/student', [HomePageController::class,"student"])->name('student');

Route::middleware(['auth'])->group(function () {
  Route::get('/students/list', [StudentsController::class,"list"])->name('students.list');
  Route::get('/students/form', [StudentsController::class,"create"])->name('students.create');
  Route::post('/students', [StudentsController::class,"store"])->name('students.store');
  Route::get('/students/{students}', [StudentsController::class,"edit"])->name('students.edit');
  Route::put("/students/{students}", [StudentsController::class,"update"])->name('students.update');
  Route::delete('/students/{students}', [StudentsController::class,"destroy"])->name('students.destroy');
});


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
