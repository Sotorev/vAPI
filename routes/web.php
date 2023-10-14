<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlateController;
use App\Http\Controllers\VehicleController;

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

//Rutas para placas
Route::prefix('plate')->group(function () {
    Route::get('/', [PlateController::class, 'get']);
    Route::post('/', [PlateController::class, 'store']);
    Route::put('/{id}', [PlateController::class, 'update']);
    Route::delete('/', [PlateController::class, 'delete']);
    Route::get('/{id}', [PlateController::class, 'show']);
});

//Rutas para vehiculos
Route::prefix('vehicle')->group(function () {
    Route::get('/', [VehicleController::class, 'get']);
    Route::post('/', [VehicleController::class, 'store']);
    Route::put('/{id}', [VehicleController::class, 'update']);
    Route::delete('/', [VehicleController::class, 'delete']);
    Route::get('/{id}', [VehicleController::class, 'show']);
});
