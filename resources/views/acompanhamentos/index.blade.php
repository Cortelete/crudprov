@extends('layout')

@section('content')
    <h2>Acompanhamentos</h2>
    <a href="{{ route('acompanhamentos.create') }}">➕ Novo Acompanhamento</a>

    <ul>
        @foreach($acompanhamentos as $ac)
            <li>
                {{ $ac->nome }}
                <a href="{{ route('acompanhamentos.edit', $ac) }}">✏️ Editar</a>
                <form action="{{ route('acompanhamentos.destroy', $ac) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️ Apagar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
