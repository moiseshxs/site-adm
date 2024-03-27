<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function create() 
    {
        return view('produto.registrarProduto');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produto.produto', ['produtos' => $produtos]);
    }

    public function store(Request $request) 
    {
       Produto::create([
        'nome'=> $request->nome,
        'categoria'=> $request->categoria,
        'descricao'=> $request->descricao,
        'preco'=> $request->preco,
       ]);

       return redirect('/produto');
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.registrarProduto', ['produto' => $produto]);
    }
}
