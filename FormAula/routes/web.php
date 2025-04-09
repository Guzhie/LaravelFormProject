<?php

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-cliente', function(Request $request) {
    Cliente::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'data_contato' => $request->data_contato,
        'observacoes' => $request->observacoes
    ]);

    return redirect('/')->with('success', 'Cliente cadastrado com sucesso!');
});

Route::get('/listar-cliente', function () {
    $clientes = Cliente::all();
    return view('listar', ['clientes' => $clientes]);
});

Route::get('/editar-cliente/{id}', function ($id) {
    $cliente = Cliente::find($id); 
    if (!$cliente) {
        return redirect('/listar-cliente')->with('error', 'Cliente não encontrado.');
    }
    return view('editar', ['cliente' => $cliente]); 
});

Route::post('/editar-cliente/{id}', function (Request $request, $id) {
    $cliente = Cliente::find($id); 
    if (!$cliente) {
        return redirect('/listar-cliente')->with('error', 'Cliente não encontrado.');
    }
    $cliente->update([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'origem' => $request->origem,
        'data_contato' => $request->data_contato,
        'observacoes' => $request->observacoes
    ]);

    return redirect('/listar-cliente')->with('success', 'Cliente atualizado com sucesso!');
});
Route::get('/deletar-cliente/{id}', function ($id) {
    $cliente = Cliente::find($id); 
    if (!$cliente) {
        return redirect('/listar-cliente')->with('error', 'Cliente não encontrado.');
    }
    $cliente->delete();
    return redirect('/listar-cliente')->with('success', 'Cliente deletado com sucesso!');
});