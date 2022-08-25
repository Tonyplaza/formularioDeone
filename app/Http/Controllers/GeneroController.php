<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneroRequest;
use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = Genero::all();
        return response()->json(['status' => 'success', 'generos' => $generos], 200);
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
    public function store(GeneroRequest $request)
    {
        Genero::create($request->validated());

        return response()->json(['status' => 'success', 'msg' => 'Creado con éxito!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $genero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(GeneroRequest $request)
    {
        $genero = Genero::find($request->id);

        if($genero) {
            $genero->update($request->validated());
            return response()->json(['status' => 'success', 'msg' => 'Actualizado'], 201);
        } else {
            return response()->json(['status' => 'error', 'msg' => 'No encontrado'], 404);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy($genero)
    {
        $genero = Genero::find($genero);

        if($genero) {
            $genero->delete();
            return response()->json(['status' => 'success', 'msg' => 'Eliminado'], 201);
        } else {
            return response()->json(['status' => 'error', 'msg' => 'No encontrado'], 404);

        }
    }
}
