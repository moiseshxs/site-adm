<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function count(){
        $totalCliente = Cliente::count();

        return view('cliente.cliente', ['totalCliente' => $totalCliente]);
    }
    public function create() 
    {
        return view('cliente.registrarCliente');
    }
    
    public function store(Request $request) 
    {
       Cliente::create([
        'nome'=> $request->nome,
        'nasc'=> $request->nasc,
        'telefone'=> $request->telefone,
        'username'=> $request->username,
        'senha'=> $request->senha,
        'email'=> $request->email,
       ]);

       return redirect('/cliente');
    }

    public function show()
    {
        $clientes = Cliente::all();
        return view('cliente.cliente', ['clientes' => $clientes]);
    }
}
