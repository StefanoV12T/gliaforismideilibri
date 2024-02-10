<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{   
    public function show(Review $review){
        return view('reviews.show', compact('review'));
    }

    public function createReview(){
        return view('reviews.create');
    }
}
