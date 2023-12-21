<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Review;

class CreateReview extends Component
{
    
    #[Validate] 
    public $title;
    #[Validate]
    public $body;
 
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required|min:10',
        ];
    }

    protected $messages=[
        'required'=>'Il campo inserito non può essere vuoto',
        'min'=>'Testo troppo corto',
    ];

    public function store()
    {
        $validated = $this->validate();
 
        Review::create($validated);

        session()->flash('success','Recensione creata con successo');
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
