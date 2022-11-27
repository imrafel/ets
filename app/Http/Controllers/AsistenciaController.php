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

        $fechasClase = [];
        $alumnosAsistencia = [];
        $alumnoId = [];
        $alumno = [];

        $alumnos = Asistencia::all()->groupBy('alumno_id');

        foreach ($alumnos as $key => $al) {
            array_push($alumnoId, $key);
        }

        foreach($alumnoId as $key => $al){
            $alumnoD= DB::table('alumnos')
                ->where('id', $al)->get();
            
            array_push($alumno, $alumnoD);
        }


        $fechas = Asistencia::all('fecha', 'asistio')->groupBy('fecha');
        // dd($fechas);

        foreach ($fechas as $key => $fecha) {
            array_push($fechasClase, $key);
        }
        
        foreach($fechasClase as $key => $fecha){
            $asistencia = DB::table('asistencias')
                ->where('fecha', $fecha)->get();
            
            array_push($alumnosAsistencia, $asistencia);
            // dd($alumnosAsistencia);
        }
       
        return view('asistencias.ver', compact('alumnosAsistencia', 'fechasClase', 'alumno', 'fechas', 'asistencias'));
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

        $asignacion = DB::table('asignas')
                ->where('user_id', $userLog)->get();

        // dd($asignacion[0]->user_id);
                
        $alumnos = Alumno::where('curso_id', '=', $asignacion[0]->curso_id)->get();

        // $alumnos = DB::table('alumnos')
        // ->where('curso_id', $asignacion[0]->curso_id)->get();

        // dd($alumnos);

        
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
    
        foreach($datos as $key=>$dato) {
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
