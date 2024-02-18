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

Route::get('/new/review', [ReviewController::class, 'createReview'])->name('create-review')->middleware('isReviewer');

Route::get('/all/reviews', [ReviewController::class, 'indexReviews'])->name('all-reviews');

//home recensore
Route::get('reviewer/home',[ReviewerController::class, 'index'])->name('reviewer-index');


//home revisore
Route::get('revisor/home',[RevisorController::class, 'index'])->name('revisor-index')->middleware('isRevisor');

//accetta recensione
Route::patch('accept/review/{review}',[RevisorController::class, 'acceptReview'])->name('revisor.accept_review')->middleware('isRevisor');

//rifiuta recensione
Route::patch('reject/review/{review}',[RevisorController::class, 'rejectReview'])->name('revisor.reject_review')->middleware('isRevisor');

//richiesta recensore
Route::get('/richiesta/recensore',[ReviewerController::class, 'becomeReviewer'])->name('become.reviewer')->middleware('auth');

//rendi recensore
Route::get('/make/reviewer/{user}',[ReviewerController::class, 'makeReviewer'])->name('make.reviewer');

//richiesta revisore
Route::get('/richiesta/revisore',[RevisorController::class, 'becomeRevisor'])->name('become.revisor')->middleware('isReviewer');

//rendi revisore
Route::get('/make/revisor/{user}',[RevisorController::class, 'makeRevisor'])->name('make.revisor');


//gestione categorie
Route::middleware(['isReviewer'])->group(function () {
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
});

