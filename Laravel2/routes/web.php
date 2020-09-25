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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/', [PaginasController::class,'inicio']);
Route::get('inicio', [PaginasController::class,'inicio']);
Route::get('/quienesSomos', [PaginasController::class,'quienesSomos']);
Route::get('/dondeEstamos', [PaginasController::class,'dondeEstamos']);
Route::get('foro', [PaginasController::class,'foro']);
*/
Route::resource("posts", Ejemplo3Controller::class);
//Route::resource('photos.comments', PhotoCommentController::class);
