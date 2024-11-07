<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('master');
// }); 

// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/category', [CategoryController::class, 'index'])->name('category');
// Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
// Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');
// Route::get('/writers', [WriterController::class, 'index'])->name('writers');
// Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.show');
// Route::get('/about', [PageController::class, 'about'])->name('about');

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomePageController::class, 'index'])->name('welcome');
// Route::get('/category/{name}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/popular', [HomePageController::class, 'popular'])->name('popular');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');

// Rute untuk Interactive Multimedia
Route::get('/menu/category/interactive-multimedia', [CategoryController::class, 'interactiveMultimedia'])->name('menu.category.interactive-multimedia');

// Rute untuk Software Engineering
Route::get('/menu/category/software-engineering', [CategoryController::class, 'softwareEngineering'])->name('menu.category.software-engineering');

// Route::get('/menu/category/detail-page/{id}', [CourseController::class, 'show'])->name('menu.category.detail-page');


Route::get('/category/{category}/detail', [CategoryController::class, 'showDetail'])->name('category.detail');
