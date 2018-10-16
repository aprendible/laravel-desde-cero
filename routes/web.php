<?php

Route::get('contactame', function(){
	return "Sección de contactos";
})->name('contactos');

Route::get('/', function(){
	echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 5</a><br>";
});

