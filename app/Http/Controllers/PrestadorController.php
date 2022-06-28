<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;

class PrestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestador = prestador::get();

        dd($prestador);

        
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->cpf);
        $prestador = Prestador::create([
            "nome" => $request->nome,
            "CPF/CNPJ" => $request->cpf,
            "estado" => $request->estado,
            "cidade" => $request->cidade,
            "bairro" => $request->bairro,
            "rua"=> $request->rua,
            "numero"=> $request->numero,
            "complemento" => $request->complemento,
            "celular" => $request->celular,
        ]);
        dd($prestador);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function show(Prestador $prestador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestador $prestador)
    {
        $arr = json_decode($prestador, true);
        $prestador->cpf = $arr["CPF/CNPJ"];
        return view('prestador.edit',compact('prestador'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestador $prestador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestador  $prestador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestador $prestador)
    {
        //
    }
}