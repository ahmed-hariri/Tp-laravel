<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

$articles = [
    1 => ['id' => 1, 'name' => "test1", 'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa illo illum quaerat exercitationem."],
    2 => ['id' => 2, 'name' => "test2", 'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa illo illum quaerat exercitationem."],
    3 => ['id' => 3, 'name' => "test3", 'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa illo illum quaerat exercitationem."],
    4 => ['id' => 4, 'name' => "test1", 'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa illo illum quaerat exercitationem."],
    5 => ['id' => 5, 'name' => "test2", 'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa illo illum quaerat exercitationem."],
    6 => ['id' => 6, 'name' => "test3", 'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa illo illum quaerat exercitationem."]
];
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

Route::get('/articles/{id?}', function ($id = null) use($articles) {
    dd($articles);
    return view('articles.index', [
        'articles' => $articles,
        'id' => $id
    ]);
})->name("articls");

Route::get("/create", function() {
    return view("articles.create");
})->name("create");

Route::post('/create/new', function (Request $request) use (&$articles) {
    $newId = count($articles) + 1;
    $article = [
        'id' => $newId,
        'name' => $request->input('name'),
        'description' => $request->input('description'),
    ];
    $articles[$newId] = $article;

    return view('articles.index', ['articles' => $articles]);
})->name('create-new');

Route::get('/remove/{id}', function ($id) use (&$articles) {
    unset($articles[$id]);
    return view('articles.index', ['articles' => $articles]);
})->name('remove-article');