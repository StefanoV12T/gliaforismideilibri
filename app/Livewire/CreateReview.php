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
    public $author;
    #[Validate]
    public $selectedCategories=[];
    public $category_id;
    
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'author'=> 'required|min:3',
            'selectedCategories' => 'required',
        ];
    }

    protected $messages=[
        'required'=>'Il campo inserito non può essere vuoto',
        'min'=>'Testo troppo corto',
    ];

    public function store()
    {

        foreach ($this->selectedCategories as $category) {
            $validated = $this->validate();

            $review=Review::create($validated);
        
            $review->user_id=auth()->user()->id;
            $review->category_id=$category;
            $review->categories()->attach($category);
            $review->save();
            session()->flash('success','Recensione creata con successo');  
        }
        $this->cleanForm();


        //FUNZIONA MA NON INSERISCE L'ID CATEGORY NELLA TABELLA REVIEW

        // $validated = $this->validate();
        
        
        // $review=Review::create($validated);

        // //dd($this->selectedCategories);
        // // $review = new review();
        // // $review->title = $this->title;
        // // $review->body = $this->body;
        
        // $review->user_id=auth()->user()->id;
        // //$review->category_id=$this->selectedCategories;
        // // dd($this->selectedCategories);
        // // foreach ($this->selectedCategories as $category) {
        // //     dd($category);
        // //     $review->categories()->attach($category->id);
        // // }
        // $review->categories()->attach($this->selectedCategories);
        // $review->save();
        // session()->flash('success','Recensione creata con successo');
        // $this->cleanForm();
    }

    public function cleanForm(){
        $this->title="";
        $this->body="";
        $this->author="";
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
