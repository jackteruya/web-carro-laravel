@extends('layouts.main')

@section('title', 'Cadastrar Cliente')

@section('content')

    <h1>Deseja deletar o Cliente: {{ $cliente->nome }} ?</h1>
        <div>
            @if($cliente->genero == 'masculino')
                <p>Genero: Masculino</p>
            @else
                <p>Genero: Feminino</p>
            @endif
        </div>
        <div>
            <p>Data de nascimento: {{ date('d-m-Y', strtotime($cliente->data_nascimento)) }}</p>
        </div>
    </div>
    <form action="/clientes/{{ $cliente->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" >Excluir</button>
    </form>

@endsection
