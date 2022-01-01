<?php

use App\Http\Controllers\PostContoller;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','PostController@index');

Route::get('posts/{post}','PostController@show');

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts',[
        'posts' => $category->posts,
        'categories' => Category::all()
    ]);

})->name('category');

Route::get('categories/{category:id}',function(Category $category){
    return view('posts.index',[
        'posts' => $category->posts
    ]);

});


Route::get('authors/{author:username}',function(User $author){
    return view('posts.index',[
        'posts' => $author->posts->load(['category','author']),
        'categories' => Category::all()
    ]);

});



