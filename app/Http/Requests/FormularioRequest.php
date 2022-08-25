<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FormularioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ruc'                       =>  '',
            'razon_social'              =>  'required',
            'nombre_comercial'          =>  'required',
            'colaboradores'             =>  'required',
            'direccion'                 =>  'required',
            'provincia'                 =>  'required',
            'canton'                    =>  'required',
            'parroquia'                 =>  'required',
            'telefono'                  =>  'required',
            'formacion_id'              =>  '',
            'representante'             =>  'required',
            'email'                     =>  'required|unique:formularios,email,' . $this->id,
            'genero_id'                 =>  '',
            'logo'                      =>  '|mimes:png,jpg,jpeg',         //IMAGEN
            'numero_establecimientos'   =>  'required',
            'fecha_actividades'         =>  'required',
            'categorias_id'             =>  'required',
            'servicios_id'              =>  'required',
            'comercio_id'               =>  'required',
            'importaciones'             =>  '',
            'exportaciones'             =>  '',
            'localizacion'              =>  'required',
            'ubicacion_empresa'         =>  '',         //IMAGEN
            'comercio_electronico'      =>  '',
            'capacitaciones'            =>  '',
            'pagina_web'                =>  '',
            'redes_sociales'            =>  '',
            'whatssapp'                 =>  'required',

        ];
    }


}
