<?php

namespace App\Livewire;
use App\Models\Review;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;


class CreateReview extends Component
{
    
    #[Validate] 
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $selectedCategories=[];
    
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'selectedCategories' => 'required',
        ];
    }

    protected $messages=[
        'required'=>'Il campo inserito non può essere vuoto',
        'min'=>'Testo troppo corto',
    ];

    public function store()
    {

        $validated = $this->validate();
        
        
        $review=Review::create($validated);

        //dd($this->selectedCategories);
        // $review = new review();
        // $review->title = $this->title;
        // $review->body = $this->body;
        
        $review->user_id=auth()->user()->id;
        
        
        $review->categories()->attach($this->selectedCategories);
        $review->save();
        session()->flash('success','Recensione creata con successo');
        $this->cleanForm();
    }

    public function cleanForm(){
        $this->title="";
        $this->body="";
        $this->selectedCategories=[];
    }

    // public function updated($propertyName){
    // $this->validateOnly($propertyName);
    // }

    public function render()
    {
        return view('livewire.create-review');
    }
}
