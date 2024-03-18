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

Route::get('/cliente', function () {
    return view('cliente/cliente');
});



Route::get('/registrarCliente', [ClienteController::class, 'create']);
Route::post('/registrarCliente', [ClienteController::class, 'store'])->name('registrar_cliente');
Route::get('/cliente', [ClienteController::class, 'show']);
Route::get('/registrarCliente/{id}', [ClienteController::class, 'showById'])->name('update_cliente');