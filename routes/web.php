<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;//php artisan make:controller UserController
use App\Http\Controllers\LoginController;//php artisan make:controller LoginController

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
})->middleware('auth')->name('/');

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/producto', function () {
    return view('producto');
})->middleware('auth')->name('producto');


Route::get('/register', function () {
    return view('register');
})->name('register');


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


Route::post('/register', [UserController::class, 'create']);
Route::post('/login', [LoginController::class, 'login']);
Route::put('/login', [LoginController::class, 'logout']);


// Route::get('/categoria', function () {
//     return view('categorias.index');
// });