<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable=['title','body'];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
