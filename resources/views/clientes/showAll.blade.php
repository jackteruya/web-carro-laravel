@extends('layouts.main')

@section('title', 'Cadastrar Veiculo')

@section('content')

    <h1>Lista de Clientes</h1>

    <div style="margin: 10px">
        <a href="/clientes/criar"><button>Cadastrar</button></a>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Genero</th>
                    <th>Data de Nascimento</th>
                    <th>Ativo</th>
                    <th>Ações - Cliente</th>
                    <th>Ações - Veiculo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id  }}</td>
                        <td>{{ $cliente->nome  }}</td>
                        <td>{{ $cliente->genero  }}</td>
                        <td>{{ date('d-m-Y', strtotime($cliente->data_nascimento)) }}</td>
                        <td>
                            @if($cliente->ativo)
                                <img src="/img/correct.png" alt="ativo" class="img-icon">
                            @else
                                <img src="/img/incorrect.png" alt="desativado" class="img-icon">
                            @endif
                        </td>
                        <td>
                            <a href="/clientes/{{ $cliente->id }}"><button>Visualizar</button></a>
                            <a href="/clientes/editar/{{ $cliente->id }}"><button>Editar</button></a>
                            <a href="/clientes/deletar/{{ $cliente->id }}"><button>Excluir</button></a>
                        </td>
                        <td>
                            <a href="/veiculos/criar/{{ $cliente->id }}"><button>Adicionar Veiculo</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
