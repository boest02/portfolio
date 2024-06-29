<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/resume', function () {
    return view('pages.resume');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});


