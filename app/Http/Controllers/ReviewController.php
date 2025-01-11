<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ReviewController extends Controller
{   
    public function show(Review $review){
        if ($review->is_accepted==true){
            return view('reviews.show', compact('review'));
        }
    }

    public function createReview(){
        return view('reviews.create');
    }

    public function indexReviews(){
        $reviews=Review::where('is_accepted', true)->orderBy('created_at','desc')->paginate(9);
        return view('reviews.index', compact('reviews'));
    }

    public function destroy(Review $review){
        $review->delete();
        return redirect('/')->with('success', 'La recensione è stata cancellata');
    }
}
