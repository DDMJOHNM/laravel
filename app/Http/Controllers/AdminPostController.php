<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class AdminPostController extends Controller
{
    public function index(){

        return view('admin.posts.index',[
            'posts' => Post::paginate(50)
        ]);
    }

    public function edit(Post $post)
    {

        return view('admin.posts.edit',['post' => $post]);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return back()->with('success','post deleted');
    }



    public function show(Post $post)
    {

        return view('admin.posts.show',['post' => $post]);
    }

    public function create(){

        return view('admin.posts.create');

    }

    public function update(Post $post){


       $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts','slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories','id')]
        ]);

        //$attributes['user_id'] = auth()->id();

        if (isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('Success Post Updated');

    }


    public function store(){


        $attributes = request()->validate([
             'title' => 'required',
             'thumbnail' => 'required|image',
             'slug' => ['required', Rule::unique('posts','slug')],
             'excerpt' => 'required',
             'body' => 'required',
             'category_id' => ['required', Rule::exists('categories','id')]
         ]);

         $attributes['user_id'] = auth()->id();
         $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

         Post::create($attributes);

         return redirect('/');

     }
}
