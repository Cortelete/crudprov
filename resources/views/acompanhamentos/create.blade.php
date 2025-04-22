@extends('layout')

@section('content')
    <h2>Novo Acompanhamento</h2>
    <form action="{{ route('acompanhamentos.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <button type="submit">Salvar</button>
    </form>
@endsection
