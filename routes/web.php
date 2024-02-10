<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\CategoryController;
use App\Livewire\CreateReview;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class, 'welcome'] )->name('welcome');

Route::get('/category_searched/{category}', [HomeController::class, 'searched'])->name('categories-searched');

Route::get('/show/{review}',[ReviewController::class, 'show'] )->name('show-review');

Route::get('/nuova/revisione', [ReviewController::class, 'createReview'])->name('create-review')->middleware(['auth']);


Route::middleware(['auth'])->group(function () {
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
});

