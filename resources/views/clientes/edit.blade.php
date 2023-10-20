@extends('layouts.main')

@section('title', 'Cadastrar Cliente')

@section('content')

    <h1>Editar Cliente: {{ $cliente->nome }}</h1>
    <form action="/clientes/atualizar/{{ $cliente->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $cliente->nome }}">
        </div>
        <div>
            <label for="genero">Genero</label>
            <select name="genero" id="genero">
                <option value="masculino" {{ $cliente->genero == 'masculino' ? "selected='selected'" : "" }}>Masculino</option>
                <option value="feminino" {{ $cliente->genero == 'feminino' ? "selected='selected'" : "" }}>Feminino</option>
            </select>
        </div>
        <div>
            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="{{ date('Y-m-d', strtotime($cliente->data_nascimento)) }}">
        </div>
        <input type="submit" value="Cadastrar">
    </form>

@endsection
