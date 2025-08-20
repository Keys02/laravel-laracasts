<?php
use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {
    return view('home');
});

Route::get('/books', function() {
    return view('books', [
        "books" => Book::all()
    ]);
});

Route::get('/book/{id}', function($id) {
    $book = Book::find($id);
    return view('book', ["book" => $book]);
});

Route::get('/about', fn() => view('about') );

Route::get('/contact', fn() => view('contact'));

Route::get('/team', fn() => view('team'));

Route::get('/version', fn() => view('version'));