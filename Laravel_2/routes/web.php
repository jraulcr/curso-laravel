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
Route::get('/', [MiControlador::class,'index']);
Route::get('/crear', [MiControlador::class,'create']);
Route::get('/articulos', [MiControlador::class,'store']);
Route::get('/mostrar', [MiControlador::class,'show']);
Route::get('/contacto', [MiControlador::class,'contactar']);
Route::get('/galeria', [MiControlador::class,'galeria']);
