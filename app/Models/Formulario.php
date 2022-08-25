<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    protected $fillable = [
        'ruc',
        'razon_social',
        'nombre_comercial',
        'colaboradores',
        'direccion',
        'provincia',
        'canton',
        'parroquia',
        'telefono',
        'formacion_id',
        'representante',
        'email',
        'genero_id',
        'logo',
        'numero_establecimientos',
        'fecha_actividades',
        'categorias_id',
        'servicios_id',
        'comercio_id',
        'importaciones',
        'exportaciones',
        'localizacion',
        'ubicacion_empresa',
        'comercio_electronico',
        'capacitaciones',
        'pagina_web',
        'redes_sociales',
        'whatssapp',
    ];

}
