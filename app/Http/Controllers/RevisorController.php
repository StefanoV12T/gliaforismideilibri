<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $review_to_check=Review::where('is_accepted', null)->first();
        return view('revisor.index', compact ('review_to_check'));
    }

    public function acceptReview(Review $review){
        $review->setAccepted(true);
        return redirect()->back()->with('messagge', 'Hai accettato la recensione');
    }

    
    public function rejectReview(Review $review){
        $review->setAccepted(false);
        return redirect()->back()->with('messagge', 'Hai rifiutato la recensione');
    }

}
