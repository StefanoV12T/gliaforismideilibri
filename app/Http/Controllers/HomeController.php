<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function welcome(){
        $reviews= Review::take(3)->orderBy('created_at','desc')->get();
        return view ('welcome', compact('reviews'));
    }
    
    public function searched(Category $category)
    {
        return view('categories.searched', compact('category'));        
    }
}
