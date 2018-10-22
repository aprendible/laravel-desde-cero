<?php

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

// Route::view('/', 'home')->name('home'); // Politicas de privacidad, terminos y condiciones

// Route::get('/', function(){
// 	$nombre = "Jorge";

// 	return view('home', compact('nombre')); // ['nombre' => $nombre]
// })->name('home');
