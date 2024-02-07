<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function welcome(){
        $reviews= Review::take(3)->orderBy('created_at','desc')->get();
        return view ('welcome', compact('reviews'));
    }
}
