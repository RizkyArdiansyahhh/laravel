<?php

use App\Models\Post;
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

Route::get('/blog/{slug}', function($slug){
    return view('post', ['post' => Post::find($slug)]);
});