<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TutorialController;
use App\Http\Controllers\API\ContenedorController;
use App\Http\Controllers\API\RutaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('tutorial')->group(function () {
    Route::get('/',[ TutorialController::class, 'getAll']);
    Route::get('/{id}',[ TutorialController::class, 'get']);
});
Route::prefix('contenedor')->group(function () {
    Route::get('/',[ ContenedorController::class, 'getAll']);
    Route::get('/{id}',[ ContenedorController::class, 'get']);
});
Route::prefix('ruta')->group(function () {
    Route::get('/detalles/{zona}',[ RutaController::class, 'obtenerDetallesPorZona']);
    Route::get('/{id}',[ RutaController::class, 'getRuta']);
    Route::get('/{id}/puntos',[ RutaController::class, 'getPuntosRuta']);
    Route::get('/detalles/{idDetalle}/frecuencias',[ RutaController::class, 'getFrecuencia']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
