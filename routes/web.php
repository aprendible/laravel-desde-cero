<?php

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');

Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');
