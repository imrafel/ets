<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\Asistencia;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Jornada;

use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $asistencias = Asistencia::all()->groupBy('alumno_id');

        $ids = [];
        $fechas = [];
        $meses = [];
        $asis = [];

        



        // foreach ($asistencias as $key => $value) {
        //     $uniqId = array_unique($ids);
        //     array_push($ids, $value->alumno_id);
        //     array_push($fechas, $value->fecha);
        //     array_push($meses, $value->mes);
        //     array_push($asis, $value->asistio);
 
        //     foreach ($ids as $key => $dato) {                
        //         $dato = array(
        //             $fechas[$key] => $asis[$key],
        //         );
        //     }
        //     // array_push($alumnos, $dato);
        // }

        // dd($uniqId);



        $productos = array(

            'Rafael Carranza' => array(
                '12' => "Si",
                '22' => "No",
                '23' => "Si",
                '24' => "PE"
            ),
            'Jose Manuel' => array(
                '12' => "Si",
                '33' => "No",
                '63' => "Si",
                '55' => "PE"
            ),
            'Ruben Rivera' => array(
                '44' => "Si",
                '55' => "No",
                '66' => "Si",
                '22' => "PE"
            ),
        );


        return view('asistencias.index', compact('asis', 'productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $alumnos = Alumno::where('curso_id', '1')->get();



        return view('asistencias.create', compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $datosAsistencia = request()->except('_token', 'nombre', 'apellido', 'jornada_id');

        $ids = $datosAsistencia['id'];
        $asistio = $datosAsistencia['asistio'];
        $fecha = $datosAsistencia['dia'];
        $mes = $datosAsistencia['mes'];

        $datos = array_combine($ids, $asistio);

        // foreach($ids as $value) {
        //     foreach ($asistio as $asis) {
        //             $data = array(
        //             'alumno_id' => $value, 
        //             'fecha' => $fecha,
        //             'mes' => $mes,
        //             'asistio' => $asis,
        //             );
        //         Asistencia::insert($data);    
        //     }
        // }





        foreach ($datos as $key => $dato) {
            $data = array(
                'alumno_id' => $key,
                'fecha' => $fecha,
                'mes' => $mes,
                'asistio' => $dato,
            );
            Asistencia::insert($data);
        }

        // var_dump($datos);
        return redirect('/asistencia');
        // return response()->json($data);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}
