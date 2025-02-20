<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\Api\ListagemPersonalController;

Route::get('personais', [ListagemPersonalController::class, 'personais']);

Route::post('/login', [AutenticacaoController::class, 'login']);
