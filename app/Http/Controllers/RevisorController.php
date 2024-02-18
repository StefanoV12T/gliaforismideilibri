<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $review_to_check=Review::where('is_accepted', null)->first();
        return view('revisor.index', compact ('review_to_check'));
    }

    public function acceptReview(Review $review){
        $review->setAccepted(true);
        return redirect()->back()->with('success', 'Hai accettato la recensione');
    }

    
    public function rejectReview(Review $review){
        $review->setAccepted(false);
        return redirect()->back()->with('denied', 'Hai rifiutato la recensione');
    }

    public function becomeRevisor() {
        Mail::to('postmaster@gliaforismideilibri.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('success', 'Complimenti, hai richiesto di diventare revisore');        
    }

    public function makeRevisor(User $user) {
        Artisan::call('gla:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('success', 'Complimenti, l\'utente è diventato recensore');        
    }
}
