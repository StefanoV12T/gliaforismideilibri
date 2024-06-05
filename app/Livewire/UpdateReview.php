<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

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

    public function render(Review $review)
    {
        $this->review=$review;
        // $validated = $this->validate();
        // $review=Review::create($validated);
        return view('livewire.update-review', compact('review'));
    }
}
