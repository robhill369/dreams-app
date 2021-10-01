<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;

class MyPostController extends Controller
{
    public function create() 
    {
        return view('post.create');
    }

    // // Store new post
    // *

    public function store()
    {
        $attributes = $this->validatePost(new Post());
        $attributes['user_id'] = auth()->id();
        // $attributes['slug'];

        Post::create($attributes);

        return redirect('/');
   }

protected function validatePost(?Post $post = null): array
   {
       $post ??= new Post();

       return request()->validate([
           'title' => 'required',
        //    'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)], 
           'excerpt' => 'required',
           'body' => 'required',
           'explicit_content' => 'sometimes',
           'public'=> 'sometimes',
           'category_id' => ['required', Rule::exists('categories', 'id')]
       ]);
   }

}
