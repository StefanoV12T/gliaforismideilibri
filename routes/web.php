<?php

use App\Livewire\CreateReview;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewerController;

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

Route::get('/new/review', [ReviewController::class, 'createReview'])->name('create-review')->middleware(['auth']);

Route::get('/all/reviews', [ReviewController::class, 'indexReviews'])->name('all-reviews');

//home recensore
Route::get('reviewer/home',[ReviewerController::class, 'index'])->name('reviewer-index');


//home revisore
Route::get('revisor/home',[RevisorController::class, 'index'])->name('revisor-index');

//accetta recensione
Route::patch('accept/review/{review}',[RevisorController::class, 'acceptReview'])->name('revisor.accept_review');

//rifiuta recensione
Route::patch('reject/review/{review}',[RevisorController::class, 'rejectReview'])->name('revisor.reject_review');



Route::middleware(['auth'])->group(function () {
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
});

