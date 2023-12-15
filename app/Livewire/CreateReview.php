<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class CreateReview extends Component
{
    public $title;
    public $body;

    protected $rules=[
        'title'=>'required|min:3',
        'body'=>'required|min:500',
    ];

    protected $messages=[
        'required'=>'Il campo inserito non può essere vuoto',
        'min'=>'Testo troppo corto',
    ];

    public function store()
    {
        Review::create([
            'title'=>$this->title,
            'body'=>$this->body,

        ]);
        session()->flash('success','Recensione creata con successo');
        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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
