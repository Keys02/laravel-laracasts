<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', fn() => view('contact') );

Route::get('/contact', fn() => view('contact') );

Route::get('/team', fn() => view('team'));