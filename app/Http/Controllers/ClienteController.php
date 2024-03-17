<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create() {
        return view('cliente.registrarCliente');
    }
    
    public function salvar(Request $request) {

        $request->validate([
            'nome' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:clientes',
            'nasc' => 'required|date',
            'telefone' => 'required|string|max:255|unique:clientes',
            'email' => 'required|string|email|max:255|unique:clientes',
            'senha' => 'required|string|min:2', 
        ]);
//INSERT NO BANCO
        $cliente = new Cliente();
        $cliente->nome = $request->input("nome");
        $cliente->username = $request->input("username");
        $cliente->nasc = $request->input("nasc");
        $cliente->telefone = $request->input("telefone");
        $cliente->email = $request->input("email");
        $cliente->senha = bcrypt($request->input("senha"));
        $cliente->save();
        
        return redirect('/cliente')->with('success','Cliente salvo com sucesso!');
    }
}
