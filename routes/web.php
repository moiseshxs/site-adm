<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdmController;

Route::get('/', function () {
    return view('login/login');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/produto', function () {
    return view('produto/produto');
});


Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/registrarAdmin', function () {
    return view('admin/registrarAdmin');
});

Route::get('/cliente', function () {
    return view('cliente/cliente');
});

Route::get('/registrarAdmin', [AdmController::class, 'create']);
Route::post('/registrarAdmin', [AdmController::class, 'store'])->name('registrar_adm');
Route::get('/admin', [AdmController::class, 'index']);

Route::get('/registrarCliente', [ClienteController::class, 'create']);
Route::post('/registrarCliente', [ClienteController::class, 'store'])->name('registrar_cliente');
Route::get('/cliente', [ClienteController::class, 'show']);
Route::get('/registrarCliente/{id}', [ClienteController::class, 'showById'])->name('update_cliente');