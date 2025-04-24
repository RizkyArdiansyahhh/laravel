<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ["nama" => "Rizky Ardiansyah"]);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Daftar Blog','posts' => Post::all()]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog/{post:slug}', function(Post $post){
    return view('post', ['title'=> 'Article '. $post->title, 'post' => $post]);
});

Route::get('author/{user:username}', function(User $user){
    return view('blog', ['title' => count($user->posts) . ' Article by ' . $user->name ,'posts' => $user->posts]);
});
Route::get('categorie/{categorie:slug}', function(Categorie $categorie){
    return view('blog', ['title' => 'Article in '. $categorie->name ,'posts' => $categorie->posts]);
});