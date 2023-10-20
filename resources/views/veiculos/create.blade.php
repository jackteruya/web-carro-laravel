@extends('layouts.main')

@section('title', 'Cadastrar Veiculos')

@section('content')

<div>
    <h1>Cadastrar Veiculo</h1>
    <div>
        <p>Cliente: {{ $cliente }}</p>
    </div>
    <form action="/veiculos" method="POST">
        @csrf
        <div>
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" placeholder="Marca do veiculo - Ex.: FIAT">
        </div>
        <div>
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" placeholder="Modelo do veiculo - Ex.: UNO">
        </div>
        <div>
            <label for="ano_fabricacao">Ano De Fabricação</label>
            <input type="text" id="ano_fabricacao" name="ano_fabricacao" placeholder="Ano de fabricação do veiculo - Ex.: 2010">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</div>

@endsection
