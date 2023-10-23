@extends('layouts.main')

@section('title', 'Deletar Veiculos')

@section('content')

    <h1>Deseja deletar o Veiculo: {{ $veiculo->modelo }} ?</h1>
    <div>
        <div>
            <p>Marca: {{ $veiculo->cliente->nome }}</p>
        </div>
        <div>
            <p>Marca: {{ $veiculo->marca }}</p>
        </div>
        <div>
            <p>Ano: {{ date('d-m-Y', strtotime($veiculo->data_nascimento)) }}</p>
        </div>
    </div>
    <form action="/veiculos/{{ $veiculo->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" >Excluir</button>
    </form>

@endsection
