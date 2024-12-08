@extends('layouts.app')

@section('content')
    <h1>Pedidos</h1>
    <a href="{{ route('pedidos.create') }}">Criar Novo Pedido</a>
    <ul>
        @foreach($pedidos as $pedido)
            <li>{{ $pedido->idpedido }} - {{ $pedido->cliente->nome }} - {{ $pedido->valor_total }}</li>
        @endforeach
    </ul>
@endsection
