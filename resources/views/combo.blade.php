@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Monte seu combo 🍽️</h2>
    <form onsubmit="mostrarAviso(event)">
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

        <button type="submit" class="btn btn-warning">Confirmar Pedido</button>

        <div id="aviso-container" class="mt-3"></div>
    </form>
</div>

<script>
    function mostrarAviso(event) {
        event.preventDefault();

        const avisoContainer = document.getElementById('aviso-container');
        avisoContainer.innerHTML = `
            <div class="alert alert-info text-center" role="alert">
                Esta funcionalidade será ativada em breve. Aguarde as próximas atualizações! 🚧
            </div>
        `;
    }
</script>
@endsection
