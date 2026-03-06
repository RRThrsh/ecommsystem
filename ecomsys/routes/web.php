<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/pages/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/pages/contact', function () {
    return view('pages.contact');
})->name('contact');
