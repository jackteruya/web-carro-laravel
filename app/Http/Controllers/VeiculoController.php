<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Revisao;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{

    public function create($cliente_id) {

        $cliente = Cliente::findOrFail($cliente_id);

        return view('veiculos.create', ['cliente' => $cliente]);
    }

    public function store(Request $request) {

        $veiculo = new Veiculo;

        $veiculo->marca = $request->marca;
        $veiculo->cliente_id = $request->cliente_id;
        $veiculo->modelo = $request->modelo;
        $veiculo->ano_fabricacao = $request->ano_fabricacao;
        $veiculo->ativo = true;

        $veiculo->save();

        return view('veiculos.show', ['veiculo' => $veiculo])->with('msg', 'Veiculo criado com sucesso!');

    }

    public function show($id) {

        $veiculo = Veiculo::findOrFail($id);

        $revisaos = Revisao::where('cliente_id', $veiculo->id)->orderByDesc('data_revisao')->limit(5)->get();

        return view('veiculos.show', ['veiculo' => $veiculo, 'revisaos' => $revisaos]);
    }

    public function edit($id) {
        $veiculo = Veiculo::findOrFail($id);

        return view('veiculos.edit', ['veiculo' => $veiculo]);
    }

    public function update(Request $request) {

        $data = $request->all();

        Veiculo::findOrFail($request->id)->update($data);

        return redirect('/veiculos')->with('msg', 'Veiculo editado com sucesso!');

    }

    public function delete($id) {

        $veiculo = Veiculo::findOrFail($id);

        return view('veiculos.delete', ['veiculo' => $veiculo]);
    }

    public function destroy($id) {

        Veiculo::findOrFail($id)->update(['ativo' => false]);

        return redirect('/clientes')->with('msg', 'Veiculo excluído com sucesso!');

    }
}
