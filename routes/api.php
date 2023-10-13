<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TutorialController;
use App\Http\Controllers\API\ContenedorController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
