@extends('layout')

@section('content')
    <h2>Editar Acompanhamento</h2>
    <form action="{{ route('acompanhamentos.update', $acompanhamento) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $acompanhamento->nome }}" required><br>
        <button type="submit">Atualizar</button>
    </form>
@endsection
