<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/posts', function () {
    // $posts = Post::all();
    $posts = Post::with('category')->get();
    return view('posts',[
        'posts' => $posts 
    ]);
});


Route::get("/posts/{post:slug}", function (Post $post) {
    return view('post', [
        "post" => $post
    ]);
});

Route::get("/category/{category:slug}", function (Category $category) {
    return view("category_posts", [
        "posts" => $category->posts
    ]);
});