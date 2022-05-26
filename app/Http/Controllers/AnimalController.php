<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use lluminate\Database\Eloquent\Collection;

class AnimalController extends Controller
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
        Animal::create([
            'AN_NOME' => $request->AN_NOME,
            'AN_IDADE' => $request->AN_IDADE,
            'AN_DESCRICAO' => $request->AN_DESCRICAO,
            'AN_TIPO' => $request->AN_TIPO,
            'AN_RACA' => $request->AN_RACA,
            'AN_COMPRAVACINA' => $request->AN_COMPRAVACINA,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit( $animal)
    {
        $animal = Animal::findOrFail($animal);
        return view('editar-animal', ['animal' => $animal]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $animal)
    {
        Animal::findOrFail($animal)->update($request->all());
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($animal)
    {
        Animal::findOrFail($animal)->delete();
        //Animal::find($animal)->delete();
        return redirect('/dashboard');
        //echo $animal;
    }
}
