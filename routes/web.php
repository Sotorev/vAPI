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
Route::get('/plates/{id}', 'PlateController@show');

// Ruta para crear una placa
Route::post('/plates', 'PlateController@store');

// Ruta para actualizar una placa
Route::put('/plates/{id}', 'PlateController@update');

// Ruta para eliminar una placa
Route::delete('/plates/{id}', 'PlateController@delete');

// Rutas para listar todos los vehículos
Route::get('/vehicles', 'VehicleController@get');

// Ruta para encontrar un vehículo por ID
Route::get('/vehicles/{id}', 'VehicleController@show');

// Ruta para crear un vehículo
Route::post('/vehicles', 'VehicleController@store');

// Ruta para actualizar un vehículo
Route::put('/vehicles/{id}', 'VehicleController@update');

// Ruta para eliminar un vehículo
Route::delete('/vehicles/{id}', 'VehicleController@delete');
