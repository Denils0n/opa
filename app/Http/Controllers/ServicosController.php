<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use App\Models\Servicos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = Auth::user()->id;
        Servicos::create([
            'hora' => $request->hora,
            'preco' => $request->preco,
            'descricao'=>$request->descricao,
            'categoria_id' => $request->servico,
            'prestador_id' => $a-10
        ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function show(Servicos $servicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function edit($servicos)
    {
        $servicos = Servicos::findOrFail($servicos);
        return view('editar-servico', ['servicos' => $servicos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $servicos)
    {

        var_dump($servicos);
        Servicos::findOrFail($servicos)->update($request->all());
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicos  $servicos
     * @return \Illuminate\Http\Response
     */
    public function destroy($servicos)
    {
        Servicos::findOrFail($servicos)->delete();
        return redirect()->back();
    }
}
