<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get();
        
        return view('clientes/index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $cliente = new Cliente;
 
            $cliente->nomecompleto = $request->nomecompleto;
            $cliente->cpf = $request->cpf;
            $cliente->rg = $request->rg;
            $cliente->nascimento = $request->nascimento;

            $cliente->save();

            return response()->json(['success'=>true, 'message'=>'Cliente '.$cliente->nome.' cadastrado com sucesso.']);

        } catch (\Throwable $th) {
            return response()->json(['success'=>false, 'message'=>'Ocorreu algum erro ao cadastrar o cliente!']);
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes/editarcliente', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
            $dados = $request->all();
            Cliente::findOrFail($id)->update($dados);
            
            return redirect()->route('veiculos.create')->with('msg', 'Cliente '.$dados['nome'].' alterado com sucesso.');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::where('id', $id)->firstorfail()->delete();
        return redirect()->route('clientes.index')->with('msg', 'Cliente excluído com sucesso.');;
    }
}
