<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('alumnos')->insert([
            'TU' => '1',
            'curso' => 'Mecanismos del Automovil',
            'jornada' => 'Matutina',
            'edad' => '24',
            'ingreso' => 'Primero ingreso',
            'carne' => 'E-2014465',
            'nombre' => 'Diamantino Romero',
            'apellido' => 'Cifuentes Lopez',
            'direccion' => '35 avenida, 17-44, Ciudad de plata, sector 2',
            'departamento' => 'Guatemala',
            'municipio' => 'Guatemala',
            'movil' => '52487985', //numero de celular
            'casa' => '12514798',//numero de casa
            'email' => 'jose@gmail.com',
            'vehiculo' => '1',
            'tipoVehiculo' => 'Carro', //moto/carro
            'placas' => 'P-548GLP',
            'kinal' => 'Facebook', //como se entero de kinal
            'parentesco' => 'Papa',
            'ultimoGrado' => 'Perito en Informatica',
            'recomendacion' => 'Roberto Aguilar',
            'empresa' => 'Fundacion Kinal',//empresa donde labora
            'puesto' => 'Desarrollador Junior',//puesto que desempe;a
            'direccionEmpresa' => '34 avenida, 12-02, Carretera al salvador, colonia Don Ruben',
            'telEmpresa' => '21445877', //telefono de empresa
            'empresaPaga' => '1',
            'recibo' => 'Roberto Aguilar',
            'nit' => '1254787-8',
            'formaPago' => 'Efectivo',
            'inscripcion' => '900',
            'mensualidad' => '550',
            'duracion' => '5', //cuantos meses dura el curso,modulo
            'meses' => 'Jun-Jul',
            'razonamiento' => 'Jose Manuel'
        ]);
    }
}


