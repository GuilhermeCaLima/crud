<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class ClientesController extends Controller
{
    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        Cliente::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'cpf' => $request->cpf,
        ]);

        return "Cliente salvo com sucesso"; //criar view mais tarde
    }

    public function show(){
        $clientes = Cliente::all();
        return view('clientes.todos', ['clientes' => $clientes]);
    }

    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return "Cliente excluido com sucesso."; //criar view mais tarde
    }

    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.editar', ['cliente' => $cliente]);
    }

    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'cpf' => $request->cpf,
        ]);
        return "Cliente atualizado com sucesso."; //criar view mais tarde
    }
}
