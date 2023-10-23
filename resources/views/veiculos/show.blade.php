@extends('layouts.main')

@section('title', 'Cadastrar Veiculo')

@section('content')

    <h1>Detalhes do veiculo</h1>

    <div>
        <h2><img src="/img/car.png" alt="cliente ativo" class="img-icon-btn"> {{ $veiculo->modelo }}</h2>
        <p>Cliente: {{ $veiculo->cliente->nome }}</p>
        <p>Marca: {{ $veiculo->marca }}</p>
        <p>Ano: {{ $veiculo->ano_fabricacao }}</p>
    </div>

    <div style="margin: 15px">
        <div>
            <p>Ultimas revisões</p>
        </div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Veiculo</th>
                <th>Data da Revisao</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($veiculo->revisaos as $revisao)
                <tr>
                    <td>{{ $revisao->id  }}</td>
                    <td>{{ $revisao->veiculo->modelo  }}/{{ $revisao->veiculo->marca  }}</td>
                    <td>{{ $revisao->data_revisao  }}</td>
                    <td>
                        @if($revisao->ativo)
                            <img src="/img/correct.png" alt="ativo" class="img-icon">
                        @else
                            <img src="/img/incorrect.png" alt="desativado" class="img-icon">
                        @endif
                    </td>
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
