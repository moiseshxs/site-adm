<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function create() 
    {
        return view('cliente.registrarCliente');
    }
    
    public function store(Request $request) 
    {
       Cliente::create([
        'username'=> $request->username,
        'cor'=> $request->cor,
        'email'=> $request->email,
        'senha'=> Hash::make($request->senha),
       ]);

       return redirect('/cliente');
    }

    public function show()
    {
        $clientes = Cliente::all();
        return view('cliente.cliente', ['clientes' => $clientes]);
    }

    public function showById($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.registrarCliente', ['cliente' => $cliente]);
    }
}
