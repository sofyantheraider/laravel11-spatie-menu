<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/submenu1', function () {
    return view('submenu1');
})->name('submenu1');

Route::get('/submenu2', function () {
    return view('submenu2');
})->name('submenu2');
