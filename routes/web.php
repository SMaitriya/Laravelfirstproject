<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('pages/home');
})->name('home');

Route::name('about')->get('/about-us', function(){
    return view('pages/about');
});


Route::view('/help', 'pages.help') -> name('help');