<?php

use App\Http\Controllers\VeiculoController;
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
Route::get('/clientes', [\App\Http\Controllers\ClienteController::class, 'showAll']);
Route::get('/clientes/criar', [\App\Http\Controllers\ClienteController::class, 'create']);
Route::post('/clientes', [\App\Http\Controllers\ClienteController::class, 'store']);
Route::get('/clientes/{id}', [\App\Http\Controllers\ClienteController::class, 'show']);
Route::get('/clientes/editar/{id}', [\App\Http\Controllers\ClienteController::class, 'edit']);
Route::put('/clientes/atualizar/{id}', [\App\Http\Controllers\ClienteController::class, 'update']);
Route::get('/clientes/deletar/{id}', [\App\Http\Controllers\ClienteController::class, 'delete']);
Route::delete('/clientes/{id}', [\App\Http\Controllers\ClienteController::class, 'destroy']);

// Rotas do Veiculo
Route::get('/veiculos/criar/{cliente_id}', [VeiculoController::class, 'create']);
Route::post('/veiculos', [VeiculoController::class, 'store']);
Route::get('/veiculos/{id}', [VeiculoController::class, 'show']);
Route::get('/veiculos/editar/{id}', [VeiculoController::class, 'edit']);
Route::put('/veiculos/atualizar/{id}', [VeiculoController::class, 'update']);
Route::get('/veiculos/deletar/{id}', [VeiculoController::class, 'delete']);
Route::delete('/veiculos/{id}', [VeiculoController::class, 'destroy']);



// Rotas da Revisão
