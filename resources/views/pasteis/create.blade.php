@extends('layout')

@section('content')
    <h2>Novo Pastel</h2>
    <form action="{{ route('pasteis.store') }}" method="POST">
        @csrf
        <label>Sabor:</label>
        <input type="text" name="sabor" required><br>

        <label>Tamanho:</label>
        <input type="text" name="tamanho" required><br>

        <label>Acompanhamento:</label>
        <select name="acompanhamento_id">
            <option value="">Nenhum</option>
            @foreach($acompanhamentos as $ac)
                <option value="{{ $ac->id }}">{{ $ac->nome }}</option>
            @endforeach
        </select><br>

        <label>Bebida:</label>
        <input type="text" name="bebida"><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
