<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function category() 
    {
       return $this->belongsTo(Category::class); 
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $with = ['category', 'author'];
}
