<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rotas do Cliente
Route::get('/', function () {
    return view('welcome');
});

// Rotas do Veiculo
Route::get('/veiculos/criar', function () {
    return view('veiculos.create', ['cliente' => 'Jose']);
});
Route::post('/veiculos', function (Request $request) {

    return redirect('/veiculos/{id}')->with('msg', 'Evento criado com sucesso!');
});
Route::get('/veiculos/{id}', function () {
    return view('veiculos.show', ['veiculo' => '$event', 'cliente' => '$eventOwner']);
});



// Rotas da Revisão
