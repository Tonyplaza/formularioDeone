<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('ruc')->nullable();
            $table->string('razon_social');
            $table->string('nombre_comercial');
            $table->string('colaboradores');
            $table->string('direccion');
            $table->string('provincia');
            $table->string('canton');
            $table->string('parroquia');
            $table->string('telefono');
            $table->unsignedInteger('formacion_id')->nullable();            // AQUIIII
            $table->string('representante');
            $table->string('email');
            $table->unsignedInteger('genero_id')->nullable();               //AQUIII
            $table->string('logo')->nullable();                             //IMAGEN
            $table->integer('numero_establecimientos');
            $table->date('fecha_actividades');
            $table->unsignedInteger('categorias_id');                   //AQUIII
            $table->unsignedInteger('servicios_id');
            $table->unsignedInteger('comercio_id');
            $table->string('importaciones')->nullable();
            $table->string('exportaciones')->nullable();
            $table->string('localizacion');
            $table->string('ubicacion_empresa')->nullable();                            //IMAGEN
            $table->string('comercio_electronico')->nullable();
            $table->string('capacitaciones')->nullable();
            $table->string('pagina_web')->nullable();
            $table->string('redes_sociales')->nullable();
            $table->string('whatssapp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
};
