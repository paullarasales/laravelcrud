<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;



Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/add', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'add'])->name('students.add');
Route::get('/students/redirect', [StudentController::class, 'redirect'])->name('students.redirect');
Route::delete('students/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::put('students/update/{id}', [StudentController::class, 'update'])->name('students.update');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/add', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'add'])->name('products.add');
Route::delete('/products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
