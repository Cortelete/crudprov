@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>📋 Pedidos Realizados</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('montar-combo') }}" class="btn btn-primary mb-3">+ Novo Pedido</a>

    @if($pedidos->count())
        <ul class="list-group">
            @foreach($pedidos as $pedido)
                <li class="list-group-item">
                    <strong>Pastel:</strong> {{ $pedido->pastel->sabor }} ({{ $pedido->pastel->tamanho }})<br>
                    <strong>Acompanhamento:</strong> {{ $pedido->acompanhamento->nome }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum pedido registrado ainda.</p>
    @endif
</div>
@endsection
