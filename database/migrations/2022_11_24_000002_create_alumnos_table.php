<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('TU');
            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade'); 
            
            $table->bigInteger('jornada_id')->unsigned();
            $table->foreign('jornada_id')->references('id')->on('jornadas')->onDelete('cascade');

            $table->integer('edad');
            $table->string('ingreso'); //primer ingreso?
            $table->string('carne');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('movil'); //numero de celular
            $table->string('casa'); //numero de casa
            $table->string('email');
            $table->tinyInteger('vehiculo');
            $table->string('tipoVehiculo'); //moto/carro
            $table->string('placas');
            $table->string('kinal'); //como se entero de kinal
            $table->string('parentesco');
            $table->string('ultimoGrado');
            $table->string('recomendacion');
            $table->string('empresa'); //empresa donde labora
            $table->string('puesto'); //puesto que desempe;a
            $table->string('direccionEmpresa');
            $table->string('telEmpresa'); //telefono de empresa
            $table->tinyInteger('empresaPaga');
            $table->string('recibo');
            $table->string('nit');
            $table->string('formaPago');
            $table->string('inscripcion');
            $table->string('mensualidad');
            $table->string('duracion');
            $table->string('meses');
            $table->string('razonamiento');
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
        Schema::dropIfExists('alumnos');
    }
}
