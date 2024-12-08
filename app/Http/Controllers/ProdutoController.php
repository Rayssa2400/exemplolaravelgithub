<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // Exibe a lista de produtos
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    public function show($id)
    {
        // Exibe os detalhes de um produto
        $produto = Produto::find($id);
        return view('produto.show', compact('produto'));
    }

    public function create()
    {
        // Exibe o formulário para criar um novo produto
        return view('produto.create');
    }

    public function store(Request $request)
    {
        // Cria um novo produto
        Produto::create($request->all());
        return redirect()->route('produto.index');
    }
}
