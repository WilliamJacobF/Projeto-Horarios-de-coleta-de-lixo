<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;


Route::get('/ruas', [ApiController::class, 'index']);
Route::get('/ruas/buscar/{nome}', [ApiController::class, 'buscarPorNome']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::apiResource('horarios', ApiController::class);

});