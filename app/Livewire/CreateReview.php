<?php

namespace App\Livewire;
use App\Models\Review;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;


class CreateReview extends Component
{
    use WithFileUploads;
    
    public $temporary_images;
    public $images=[];
    public $image;


    #[Validate] 
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $author;
    #[Validate]
    public $selectedCategories=[];
    //public $category_id;
    
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'author'=> 'required|min:3',
            'selectedCategories' => 'required',
            'images.*'=>'image|max:1024',
            'temporary_images.*'=>'image|max:1024',
        ];
    }

    protected $messages=[
        'required'=>'Il campo inserito non può essere vuoto',
        'min'=>'Testo troppo corto',
        'temporary_images.*.max'=>'l\'immagine deve essere al massimo di 1MB',
        'temporary_images.*.image'=>'File non valido, deve essere un file immagine',
        'image*.max'=>'l\'immagine deve essere al massimo di 1MB',
        'image*.image'=>'File non valido, deve essere un file immagine',
    ];

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
        foreach($this->temporary_images as $image)
        {
            $this->images[]=$image;
        }
    } 
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
         unset($this->images[$key]); 
        }
    }

    public function store()
    {
        $validated = $this->validate();
        $review=Review::create($validated);
        $review->user_id=auth()->user()->id;
        foreach ($this->selectedCategories as $category) {
            $review->categories()->attach($category);
        }
        $review->save();
        session()->flash('success','Recensione creata con successo');  
        $this->cleanForm();        
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
