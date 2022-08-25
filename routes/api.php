<?php

use App\Http\Controllers\FormacionController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\GeneroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('formaciones', [FormacionController::class, 'index']);
Route::post('/formacion/store', [FormacionController::class, 'store']);
Route::post('/formacion/update', [FormacionController::class, 'update']);
Route::delete('/formacion/delete/{formacion}', [FormacionController::class, 'store']);


Route::get('generos', [GeneroController::class, 'index']);
Route::post('/genero/store', [GeneroController::class, 'store']);
Route::post('/genero/update', [GeneroController::class, 'update']);
Route::delete('/genero/delete/{genero}', [GeneroController::class, 'store']);






