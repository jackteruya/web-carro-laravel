@extends('layouts.main')

@section('title', 'Cadastrar Veiculo')

@section('content')

    <h1>Detalhes do cliente</h1>

    <div>
        <h2><img src="/img/cliente_ativo.png" alt="cliente ativo" class="img-icon-btn"> {{ $cliente->nome }}</h2>
    </div>

    <div>
        <div>
            <p>Veiculos</p>
        </div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano Fabricacao</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cliente->veiculos as $veiculo)
                <tr>
                    <td>{{ $veiculo->id  }}</td>
                    <td>{{ $veiculo->marca  }}</td>
                    <td>{{ $veiculo->modelo  }}</td>
                    <td>{{ $veiculo->ano_fabricacao  }}</td>
                    <td>
                        <a href="/veiculos/{{ $veiculo->id }}"><button>Visualizar</button></a>
                        <a href="/veiculos/{{ $veiculo->id }}"><button>Editar</button></a>
                        <a href="/veiculos/{{ $veiculo->id }}"><button>Excluir</button></a>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <div>
            <p>Ultimas revisões</p>
        </div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Veiculo</th>
                <th>Data da Revisao</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($revisaos as $revisao)
                <tr>
                    <td>{{ $revisao->id  }}</td>
                    <td>{{ $revisao->veiculo->modelo  }}/{{ $revisao->veiculo->marca  }}</td>
                    <td>{{ $revisao->data_revisao  }}</td>
                    <td>
                        <a href="/revisaos/{{ $revisao->id }}"><button>Visualizar</button></a>
                        <a><button>Editar</button></a>
                        <a><button>Excluir</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
