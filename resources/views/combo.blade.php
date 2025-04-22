@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Monte seu combo 🍽️</h2>
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pastel" class="form-label">Escolha seu pastel:</label>
            <select id="pastel" name="pastel_id" class="form-select">
                @foreach($pasteis as $pastel)
                    <option value="{{ $pastel->id }}">{{ $pastel->sabor }} ({{ $pastel->tamanho }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="acompanhamento" class="form-label">Escolha um acompanhamento:</label>
            <select id="acompanhamento" name="acompanhamento_id" class="form-select">
                @foreach($acompanhamentos as $acompanhamento)
                    <option value="{{ $acompanhamento->id }}">{{ $acompanhamento->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Confirmar Pedido</button>
    </form>
</div>
@endsection
