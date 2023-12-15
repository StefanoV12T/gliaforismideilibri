<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class CreateReview extends Component
{
    public $title;
    public $body;

    public function store()
    {
        Review::create([
            'title'=>$this->title,
            'body'=>$this->body,

        ]);

        $this->cleanForm();
    }

    public function cleanForm(){
        $this->title="";
        $this->body="";
    }
    public function render()
    {
        return view('livewire.create-review');
    }
}
