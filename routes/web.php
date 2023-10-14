<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas para listar todas las placas
Route::get('/plates', 'PlateController@get');

// Ruta para encontrar una placa por ID
Route::get('/placas/{id}', 'PlateController@show');