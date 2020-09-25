<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ejemplo3Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/sobrenosotros', function () {
    return "Esta es la página que habla de nosotros";
});

Route::get('/contacto', function () {
    return "Aquí podrás contactar";
});

Route::get('/foro', function () {
    return "Aquí está el foro";
});

Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return "Este es el post nº " . $id . " creado por " . $nombre;
})->where('nombre','[a-zA-Z]+');
*/

//Esta funciona y con el import 'use'
//Route::get('/inicio', [EjemploController::class,'inicio']);//Invoca al método
//
Route::get('/inicio/{id}', [Ejemplo3Controller::class,'index']);

//Route::resource("posts", Ejemplo3Controller::class);

//Esta linea no funciona
//Route::get('/inicio', 'EjemploController@inicio');
