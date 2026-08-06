<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;


Route::get('/ruas', [ApiController::class, 'index']);
Route::get('/ruas/buscar/{nome}', [ApiController::class, 'buscarPorNome']);
Route::get('/login', [AuthController::class, 'login']);