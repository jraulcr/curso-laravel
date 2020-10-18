<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', 'MiControlador@index');//Estructura para versiones antiguas
Route::get('/', [MiControlador::class,'index']);
Route::get('/crear', [MiControlador::class,'create']);
Route::get('/articulos', [MiControlador::class,'store']);
Route::get('/mostrar', [MiControlador::class,'show']);
Route::get('/contacto', [MiControlador::class,'contactar']);
Route::get('/galeria', [MiControlador::class,'galeria']);

Route::get('/insertar', function () {
    DB::insert("insert into articulos (Nombre_articulo, Precio, Pais_origen, Seccion, observaciones) values (?, ?, ?, ?, ?)", ['JARRON', 15.2, 'JAPON', 'CERAMICA', 'GANGA']);
});

Route::get('/leer', function () {
    $resultados = DB::select("select * from articulos where id=?",[1]);
    foreach ($resultados as $articulo) {
        return $articulo->Nombre_articulo;
        # code...
    }
});

Route::get('/actualiza', function () {
    DB::update("update articulos set seccion = 'decoracion' where id = ?", [1]);
});

Route::get('/borrar', function () {
    DB::delete('delete from articulos where id = ?', [1]);
});
