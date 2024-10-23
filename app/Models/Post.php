<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Bimota Ares',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, quibusdam nostrum odio est facere ex fugiat magni? Ab harum aut esse ex facilis ipsum, voluptas error! Laboriosam porro nostrum dicta.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Bimota Ares',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa quasi ratione saepe consequatur odio eos, soluta aliquam. Dolorum voluptas ex vel totam rem repellendus iusto numquam quisquam, provident deserunt! Blanditiis.'
            ]
        ];
    }


    public static function find($slug)
    // {
    //     return Arr::first(static::all(), function($post) use ($slug) {
    //         return $post['slug'] == $slug;
    //     });
    // }
    {
        return Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    }
}
?>