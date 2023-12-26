<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{   
    public function show(){
        return view('reviews.show');
    }

    public function createReview(){
        return view('reviews.create');
    }
}
