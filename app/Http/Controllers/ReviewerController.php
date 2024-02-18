<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeReviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class ReviewerController extends Controller
{
    public function becomeReviewer() {
        Mail::to('postmaster@gliaforismideilibri.it')->send(new BecomeReviewer(Auth::user()));
        Mail::to('stefanociangola@gmail.com')->send(new BecomeReviewer(Auth::user()));

        return redirect()->back()->with('success', 'Complimenti, hai richiesto di diventare recensore');        
    }

    public function makeReviewer(User $user) {
        Artisan::call('gla:makeUserReviewer', ["email"=>$user->email]);
        return redirect('/')->with('success', 'Complimenti, l\'utente è diventato recensore');        
    }
}
