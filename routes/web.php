<?php

// aprendible.com = Route::get('/', function)
// aprendible.com/contacto = Route::get('contacto', function)

Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return "Saludos " . $nombre;
});

// Route::get('/', function(){
// 	return "Hola desde la página de inicio";
// });

// Route::get('contacto', function(){
	// return "Hola desde la página de contacto";
// });

// Route::get()
// Route::post() // form action="POST"
// Route::put()
// Route::patch()
// Route::delete()
