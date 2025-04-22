@extends('layout')

@section('content')
<div class="row">
    @foreach($pasteis as $pastel)
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $pastel->sabor }}</h5>
                
                <button class="btn btn-sm btn-outline-primary toggle-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#detalhe-{{ $pastel->id }}"
                    aria-expanded="false">
                    Ver mais
                </button>


                <div class="collapse mt-3" id="detalhe-{{ $pastel->id }}">
                    <p class="card-text">Tamanho: {{ $pastel->tamanho }}</p>
                    <p class="card-text">
                        Acompanhamento: {{ $pastel->acompanhamento->nome ?? 'Nenhum' }}
                    </p>
                    <a href="{{ route('pasteis.edit', $pastel->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('pasteis.destroy', $pastel->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<a href="{{ route('pasteis.create') }}" class="btn btn-success">Adicionar Pastel</a>
@endsection
