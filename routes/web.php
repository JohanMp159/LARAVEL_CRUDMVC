<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
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
    return view('principal');
});

Route::get('/categoria', [CategoriaController::class,'index']);
Route::get('/categoria/crear', [CategoriaController::class,'create']);
Route::post('/categoria/guardar', [CategoriaController::class,'store']);
Route::get('/categoria/editar/{id}', [CategoriaController::class,'edit']);
Route::put('/categoria/actualizar/{id}', [CategoriaController::class,'update']);
Route::delete('/categoria/eliminar/{categoria}', [CategoriaController::class,'destroy']);


Route::get('/producto', [ProductoController::class,'index']);
Route::get('/producto/crear', [ProductoController::class,'create']);
Route::post('/producto/guardar', [ProductoController::class,'store']);
Route::get('/producto/editar/{id}', [ProductoController::class,'edit']);
Route::put('/producto/actualizar/{id}', [ProductoController::class,'update']);
Route::delete('/producto/eliminar/{producto}', [ProductoController::class,'destroy']);


// Route::get('/categoria', function () {
//     return view('categorias.index');
// });