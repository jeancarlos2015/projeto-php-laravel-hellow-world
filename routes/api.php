<?php

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

Route::get('api/publico/teste', function () {
    $valores = [];
    for ($i = 0; $i < 10; $i++) {
        array_push($valores, 'Valor ' . $i);
    }
    return response()->json($valores);
})->name('api_modelos_publicos')
    ->middleware('cors');
