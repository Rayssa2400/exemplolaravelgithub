<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        // Exibe todos os pedidos
        $pedidos = Pedido::with('produtos', 'cliente')->get();
        return view('pedido.index', compact('pedidos'));
    }

    public function show($id)
    {
        // Exibe os detalhes de um pedido
        $pedido = Pedido::find($id);
        return view('pedido.show', compact('pedido'));
    }

    public function create()
    {
        // Exibe o formulário para criar um novo pedido
        $produtos = Produto::all(); // Pode usar produtos relacionados
        $clientes = Cliente::all(); // Pode usar clientes relacionados
        return view('pedido.create', compact('produtos', 'clientes'));
    }

    public function store(Request $request)
    {
        // Cria um novo pedido
        Pedido::create($request->all());
        return redirect()->route('pedido.index');
    }

}
