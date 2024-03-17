<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('login/login');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/produto', function () {
    return view('produto/produto');
});

Route::get('/registrarProduto', function () {
    return view('produto/registrarProduto');
});

Route::get('/cliente', [ClienteController::class, 'index']);
Route::get('/registrarCliente', [ClienteController::class, 'create']);
Route::post('/registrarCliente', [ClienteController::class, 'salvar']);
