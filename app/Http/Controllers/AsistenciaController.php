<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Models\Asistencia;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Jornada;
use App\Models\Asigna;

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
        $asistencias = Asistencia::all();

        return view('asistencias.index', compact('asistencias'));
    }

    public function curso(){

        $userLog = Auth::id();

        $cursos = Asigna::where('user_id', '=', $userLog)->get();
        
        return view('asistencias.curso', compact('cursos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cursosAsignados = [];
        $jornadasAsignadas = [];
        $userLog = Auth::id();

        if ($userLog == 1) {
            $alumnos = Alumno::all();
            $asignacion = [];
        } else {
            $asignacion = DB::table('asignas')
                ->where('user_id', $userLog)->get();
            $alumnos = Alumno::where('curso_id', '=', $asignacion[0]->curso_id)->get();
        }
        
        return view('asistencias.create', compact('alumnos', 'asignacion'));
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

        foreach ($datos as $key => $dato) {
            $data = array(
                'alumno_id' => $key,
                'fecha' => $fecha,
                'mes' => $mes,
                'asistio' => $dato,
            );
            Asistencia::insert($data);
        }

        return redirect('/asistencia');
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
