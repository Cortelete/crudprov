@extends('layout')

@section('content')
<div class="row">
    @foreach($acompanhamentos as $acompanhamento)
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $acompanhamento->nome }}</h5>
                
                <button class="btn btn-sm btn-outline-primary toggle-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#acomp-{{ $acompanhamento->id }}"
                    aria-expanded="false">
                    Ver mais
                </button>


                <div class="collapse mt-3" id="acomp-{{ $acompanhamento->id }}">
                    <a href="{{ route('acompanhamentos.edit', $acompanhamento->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('acompanhamentos.destroy', $acompanhamento->id) }}" method="POST" class="d-inline">
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
<a href="{{ route('acompanhamentos.create') }}" class="btn btn-success">Adicionar Acompanhamento</a>
@endsection
