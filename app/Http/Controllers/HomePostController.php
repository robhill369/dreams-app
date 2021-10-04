<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomePostController extends Controller
{
    public function index() 
    {   
        return view('home.index',[
            'posts' => 
            Post::inRandomOrder()
                        ->limit(6)
                        ->get()
        ]);
    }
}
