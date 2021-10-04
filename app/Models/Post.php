<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    public function category() 
    {
       return $this->belongsTo(Category::class); 
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $with = ['category', 'author'];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function excerpt()
    {
        return Str::limit($this->body, 255);
    }

    
}
