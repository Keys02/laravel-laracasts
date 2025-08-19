<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "books" => [
            [
                "title" => "Deep Work",
                "author" => "Cal Newport"
            ],
            [
                "title" => "Meditations",
                "author" => "Marcus Aurelius"
            ],
            [
                "title" => "Limitless",
                "author" => "Jim Kwik"
            ],
        ]
    ]);
});

Route::get('/about', fn() => view('contact') );

Route::get('/contact', fn() => view('contact') );

Route::get('/team', fn() => view('team'));

Route::get('/version', fn() => view('version'));