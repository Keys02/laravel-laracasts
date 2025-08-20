<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


Route::get('/', function () {
    return view('home');
});

Route::get('/books', function() {
    return view('books', [
        "books" => [
            [
                "id" => 1,
                "title" => "Deep Work",
                "author" => "Cal Newport"
            ],
            [
                "id" => 2,
                "title" => "Meditations",
                "author" => "Marcus Aurelius"
            ],
            [
                "id" => 3,
                "title" => "Limitless",
                "author" => "Jim Kwik"
            ],
        ]
    ]);
});

Route::get('/book/{id}', function($id) {
    $books = [
            [
                "id" => 1,
                "title" => "Deep Work",
                "author" => "Cal Newport"
            ],
            [
                "id" => 2,
                "title" => "Meditations",
                "author" => "Marcus Aurelius"
            ],
            [
                "id" => 3,
                "title" => "Limitless",
                "author" => "Jim Kwik"
            ],
        ];

    $book = Arr::first($books, fn($book) => $id == $book['id']);

    // dd($book);

    return view('book', ["book" => $book]);
});

Route::get('/about', fn() => view('about') );

Route::get('/contact', fn() => view('contact'));

Route::get('/team', fn() => view('team'));

Route::get('/version', fn() => view('version'));