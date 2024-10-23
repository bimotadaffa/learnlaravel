<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['name'=>'bimota', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
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

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});