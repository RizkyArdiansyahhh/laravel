<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => "Judul Artikel 1",
            'author' => 'Rizky Ardiansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, ducimus iure impedit error nostrum sint
            eos numquam, ex saepe inventore doloremque praesentium minus voluptatum illum, magnam enim ipsa dignissimos
            vero.',
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => "Judul Artikel 2",
            'author' => 'Rizky Ardiansyah pasaribu',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo expedita, ab similique quaerat aut laboriosam
            eum dolor velit beatae! Recusandae harum vel est porro consequuntur fugiat, assumenda quam voluptates
            eligendi.',
        ],
    ];
    }

    public static function find($slug): array{
        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}