<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/recentpost', function () {
    return view('recent');
});

Route::get('/join', function () {
    return view('join');
});


Route::fallback(function(){
    return "URL Was not Found";
});
