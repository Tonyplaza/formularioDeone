<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioRequest;
use App\Models\Categoria;
use App\Models\Comercio;
use App\Models\Formacion;
use App\Models\Formulario;
use App\Models\Genero;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormularioController extends Controller
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
        return view('admin.formulario.create', [
            'formulario'    =>  new Formulario,
            'formaciones'   =>  Formacion::pluck('formacion'),
            'categorias'    =>  Categoria::pluck('categoria'),
            'generos'       =>  Genero::pluck('genero'),
            'servicios'     =>  Servicio::pluck('servicio'),
            'comercios'     =>  Comercio::pluck('comercio')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormularioRequest $request)
    {
        $formulario = Formulario::create($request->validated());

        if ($request->hasFile('logo')) {
            $formulario->logo = $request->file('logo');
            $filename = $formulario->logo->getClientOriginalName();

            $save_path = '/formulario/logo/';
            $public_path = $save_path . $filename;

            $path = Storage::putFileAs(
                'public' . $save_path,
                $formulario->logo,
                $filename
            );
            if (!$path) {
                \DB::rollback();
                return response()->json(array("status" => "error", 'message' => 'Hubo un error al actualizar'));
            }
            $formulario->logo = $public_path;
        }
        if ($request->file('ubicacion_empresa')) {
            $formulario->ubicacion_empresa = $request->file('ubicacion_empresa');
            $filename_ue = $formulario->ubicacion_empresa->getClientOriginalName();
            $save_path = '/formulario/ubicaciones/';
            $public_path_ue = $save_path . $filename_ue;

            $path = Storage::putFileAs(
                'public' . $save_path,
                $formulario->ubicacion_empresa,
                $filename_ue
            );
            if (!$path) {
                \DB::rollback();
                return response()->json(array("status" => "error", 'message' => 'Hubo un error al actualizar'));
            }
            $formulario->ubicacion_empresa = $public_path_ue;
        }
        $formulario->save();
        return redirect()->back()->with('message', 'Ingresado con éxito');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
