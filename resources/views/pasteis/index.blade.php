@extends('layout')

@section('content')
    <h2>Lista de Pastéis</h2>
    <a href="{{ route('pasteis.create') }}">➕ Novo Pastel</a>

    <ul>
        @foreach($pasteis as $pastel)
            <li>
                <strong>{{ $pastel->sabor }}</strong> - {{ $pastel->tamanho }}
                | Acompanhamento: {{ $pastel->acompanhamento->nome ?? 'Nenhum' }}
                | Bebida: {{ $pastel->bebida }}
                <a href="{{ route('pasteis.edit', $pastel) }}">✏️ Editar</a>
                <form action="{{ route('pasteis.destroy', $pastel) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️ Apagar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
