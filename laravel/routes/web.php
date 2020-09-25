<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
*/

Route::view('/','home')->name('home');//resource/views/home.blade.php
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/contact','contact')->name('contact');

/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function(){
	return "Hola desde la página de inicio";
});
*/

/*
Route::get('/', function(){
	$nombre = "Juan";

	return view('home')->with();
})->name('home');
*/
/*
Route::get('saludo/{nombre?}', function($nombre="invitado"){
	return "Saludos " . $nombre;
});
*/
/*
Route::get();
Route::post();
Route::put();
Route::patch();
Route::delete();
 */

/*
Route::get('contactame', function(){
	return "Seccion de contactos"
})->name('contactos');
Route::get('/', function(){
	echo "<a href='" . route('contactos') . "'>Contactos 1</a><br/>";
	echo "<a href='" . route('contactos') . "'>Contactos 2</a><br/>";
	echo "<a href='" . route('contactos') . "'>Contactos 3</a><br/>";
});
 */


