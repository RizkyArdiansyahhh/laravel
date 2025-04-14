<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ["nama" => "Rizky Ardiansyah"]);
});
Route::get('/blog', function () {
    return view('blog', ['posts' => [
        [
            'title' => "Judul Artikel 1",
            'author' => 'Rizky Ardiansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, ducimus iure impedit error nostrum sint
            eos numquam, ex saepe inventore doloremque praesentium minus voluptatum illum, magnam enim ipsa dignissimos
            vero.',
        ],
        [
            'title' => "Judul Artikel 2",
            'author' => 'Rizky Ardiansyah pasaribu',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo expedita, ab similique quaerat aut laboriosam
            eum dolor velit beatae! Recusandae harum vel est porro consequuntur fugiat, assumenda quam voluptates
            eligendi.',
        ],
    ]]);
});
Route::get('/contact', function () {
    return view('contact');
});