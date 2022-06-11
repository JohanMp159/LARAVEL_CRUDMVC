<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
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


// Route::get('/categoria', function () {
//     return view('categorias.index');
// });