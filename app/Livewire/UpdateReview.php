<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Symfony\Contracts\Service\Attribute\Required;

class UpdateReview extends Component
{
    use WithFileUploads;
    
public $review;
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

    // public function __construct($review = null) {
    //     // dd($review);
    //     $this->$review = $review;
    // }
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

    public function mount($review = null)
    {
        $this->review = $review;
    }
 

    public function render()
    {
        return view('livewire.update-review');
    }


}
