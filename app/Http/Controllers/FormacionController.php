<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormacionRequest;
use App\Models\Formacion;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaciones = Formacion::all();

        return response()->json(['status' => 'success', 'formaciones' => $formaciones]);
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
    public function store(FormacionRequest $request)
    {
        Formacion::create($request->validated());

        return response()->json(['status' => 'success', 'msg' => 'Creado con éxito!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function show(Formacion $formacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Formacion $formacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function update(FormacionRequest $request)
    {
        $formacion = Formacion::find($request->id);

        if ($formacion) {
            $formacion->update($request->validated());
            return response()->json(['status' => 'success', 'msg' => 'Actualizado'], 201);
        } else {
            return response()->json(['status' => 'error', 'msg' => 'No encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($formacion)
    {
        $formacion = Formacion::find($formacion);

        if ($formacion) {
            $formacion->delete();
            return response()->json(['status' => 'success', 'msg' => 'Eliminado'], 201);
        } else {
            return response()->json(['status' => 'error', 'msg' => 'No encontrado'], 404);
        }
    }
}
