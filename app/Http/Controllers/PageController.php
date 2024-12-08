<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function paginainicial()
    {
        return view('paginaprincipal');
    }

    public function cardapio()
    {
        return view('cardapio');
    }

    public function carrinho()
    {
        return view('carrinho');
    }

    public function contato()
    {
        return view('contato');
    }
    
}
