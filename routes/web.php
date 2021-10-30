<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/categoria', [CategoriaController::class, 'index']);
Route::post('/api/categoria/registrar', [CategoriaController::class, 'store']);
Route::put('/api/categoria/actualizar', [CategoriaController::class, 'update']);
Route::post('/api/categoria/eliminar', [CategoriaController::class, 'destroy']);



Route::post('/api/cliente/registrar', [ClienteController::class, 'store']);
Route::post('/api/marca/registrar', [MarcaController::class, 'store']);
