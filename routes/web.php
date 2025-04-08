<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/blog', function () {
    return view('blog');
})->name("blog");

Route::get('/articles/{id?}', function ($id = null) {
    $articles = [
        1 => ['id' => 1, 'name' => "test1", 'description' => "lorem ipsum...."],
        2 => ['id' => 2, 'name' => "test2", 'description' => "lorem ipsum...."],
        3 => ['id' => 3, 'name' => "test3", 'description' => "lorem ipsum...."],
        4 => ['id' => 4, 'name' => "test1", 'description' => "lorem ipsum...."],
        5 => ['id' => 5, 'name' => "test2", 'description' => "lorem ipsum...."],
        6 => ['id' => 6, 'name' => "test3", 'description' => "lorem ipsum...."]
    ];
    return view('articles.index', [
        'articles' => $articles,
        'id' => $id
    ]);
})->name("articls");
