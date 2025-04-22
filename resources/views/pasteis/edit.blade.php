@extends('layout')

@section('content')
    <h2>Editar Pastel</h2>
    <form action="{{ route('pasteis.update', $pastel) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Sabor:</label>
        <input type="text" name="sabor" value="{{ $pastel->sabor }}" required><br>

        <label>Tamanho:</label>
        <input type="text" name="tamanho" value="{{ $pastel->tamanho }}" required><br>

        <label>Acompanhamento:</label>
        <select name="acompanhamento_id">
            <option value="">Nenhum</option>
            @foreach($acompanhamentos as $ac)
                <option value="{{ $ac->id }}" @if($pastel->acompanhamento_id == $ac->id) selected @endif>{{ $ac->nome }}</option>
            @endforeach
        </select><br>

        <label>Bebida:</label>
        <input type="text" name="bebida" value="{{ $pastel->bebida }}"><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection
