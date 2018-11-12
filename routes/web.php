<?php

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'PortfolioController')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
