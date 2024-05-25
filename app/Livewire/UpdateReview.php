<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class UpdateReview extends Component
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
    public function render($review=null)
    {
        return view('livewire.update-review', compact('review'));
    }
}
