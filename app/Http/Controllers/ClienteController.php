<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Revisao;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showAll() {

        $clientes = Cliente::all();

        return view('clientes.showAll', ['clientes' => $clientes]);
    }

    public function create() {
        return view('clientes.create');
    }

    public function store(Request $request) {

        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->genero = strtolower($request->genero);
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->ativo = true;

        $cliente->save();

        return redirect('/clientes')->with('msg', 'Cliente criado com sucesso!');

    }

    public function show($id) {

        $cliente = Cliente::findOrFail($id);

//        print($cliente->veiculos->toArray());

        $revisaos = Revisao::where('cliente_id', $cliente->id)->orderByDesc('data_revisao')->limit(5)->get();

        return view('clientes.show', ['cliente' => $cliente, 'revisaos' => $revisaos]);
    }

    public function edit($id) {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(Request $request) {

        $data = $request->all();

        Cliente::findOrFail($request->id)->update($data);

        return redirect('/clientes')->with('msg', 'Cliente editado com sucesso!');

    }

    public function delete($id) {

        $cliente = Cliente::findOrFail($id);

        return view('clientes.delete', ['cliente' => $cliente]);
    }

    public function destroy($id) {

        Cliente::findOrFail($id)->update(['ativo' => false]);

        return redirect('/clientes')->with('msg', 'Cliente excluído com sucesso!');

    }


}
