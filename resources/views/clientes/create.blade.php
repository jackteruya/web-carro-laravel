@extends('layouts.main')

@section('title', 'Cadastrar Cliente')

@section('content')

    <h1>Cadastrar Cliente</h1>

    <form action="/clientes" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome">
        </div>
        <div>
            <label for="genero">Genero</label>
            <select name="genero" id="genero">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
        </div>
        <div>
            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento">
        </div>
        <input type="submit" value="Cadastrar">
    </form>

@endsection
