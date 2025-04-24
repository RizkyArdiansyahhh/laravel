<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ["nama" => "Rizky Ardiansyah"]);
});
Route::get('/blog', function () {
    return view('blog', ['posts' => Post::all()]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog/{post:slug}', function(Post $post){
    return view('post', ['post' => $post]);
});

Route::get('author/{user}', function(User $user){
    return view('blog', ['posts' => $user->posts]);
});