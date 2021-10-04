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

   //  public function store()
   //  {
   //      $attributes = $this->validatePost(new Post());
   //      $attributes['user_id'] = auth()->id();

   //      Post::create($attributes);

   //      return redirect('/');
   // }

   public function store(Request $request)
   {
       $this->validate($request, array(
         'title' => ['required', 'max:255'],
         'body' => 'required',
         'category_id' => ['required', Rule::exists('categories', 'id')]
       ));

       //create Post
       $post = new Post;
       
       $post->title = Str::title($request->title);
       $post->excerpt = Str::limit($request->body, 210);
       $post->slug = $request->slug;
       $post->category_id = $request->category_id;
       $post->body = $request->body;
       $post->explicit_content=$request->explicit_content;
       $post->public = $request->public;
       $post->user_id = auth()->user()->id;
       
       $post->save();
       
       return redirect('/');
   }


   // Not required anymore

// protected function validatePost(?Post $post = null): array
//    {
//         $post ??= new Post();

//         return request()->validate([
//            'title' => 'required',
//          //   'excerpt' => 'required',
//            'body' => 'required',
//            'explicit_content' => 'sometimes',
//            'public'=> 'sometimes',
//            'category_id' => ['required', Rule::exists('categories', 'id')]
//         ]);
//    }

}
