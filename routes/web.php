<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/somar/{n1}/{n2}', [OperacaoController::class, 'somar']);
Route::get('/subtrair/{n1}/{n2}', [OperacaoController::class, 'subtrair']);
Route::get('/multiplicar/{n1}/{n2}', [OperacaoController::class, 'multiplicar']);
Route::get('/dividir/{n1}/{n2}', [OperacaoController::class, 'dividir']);
