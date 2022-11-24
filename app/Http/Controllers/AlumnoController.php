<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Jornada;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumnos = Alumno::all();
        $jornadaEstudio = 1;
        // $alumnos = Alumno::where('jornada_id','like',$jornadaEstudio)->paginate(5);
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cursos = Curso::all();
        $jornadas = Jornada::all();
        return view('alumnos.create', compact('cursos', 'jornadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos= [
            'TU' => 'required|string|max:100',
            'curso_id' => 'required|integer|max:100',
            'jornada_id' => 'required|integer|max:100',
            'edad' => 'required|integer|max:100',
            'ingreso' => 'required|string|max:100',
            'carne' => 'required|string|max:100',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'direccion' => 'required|string|max:100',
            'departamento' => 'required|string|max:100',
            'municipio' => 'required|string|max:100',
            'movil' => 'required|string|max:100',//numero de celular
            'casa' => 'required|string|max:100', //numero de casa
            'email' => 'required|string|max:100',
            'vehiculo' => 'required|integer|max:100',
            'tipoVehiculo' => 'required|string|max:100', //moto/carro
            'placas' => 'required|string|max:100',
            'kinal' => 'required|string|max:100', //como se entero de kinal
            'parentesco' => 'required|string|max:100',
            'ultimoGrado' => 'required|string|max:100',
            'recomendacion' => 'required|string|max:100',
            'empresa' => 'required|string|max:100',//empresa donde labora
            'puesto' => 'required|string|max:100',//puesto que desempe;a
            'direccionEmpresa' => 'required|string|max:100',
            'telEmpresa' => 'required|string|max:100',//telefono de empresa
            'empresaPaga' => 'required|integer|max:100',
            'recibo' => 'required|string|max:100',
            'nit' => 'required|string|max:100',
            'formaPago' => 'required|string|max:100',
            'inscripcion' => 'required|string|max:100',
            'mensualidad' => 'required|string|max:100',
            'duracion' => 'required|string|max:100', //cuantos meses dura el curso,modulo
            'meses' => 'required|string|max:100',
            'razonamiento' => 'required|string|max:100',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos, $mensaje);
        //
        $datosAlumno = request()->except('_token');

        Alumno::insert($datosAlumno);
        

        $ultimoId = Alumno::latest('id')->first()->id;
        
        Asistencia::create([
            'alumno_id' => $ultimoId
        ]);
        return redirect('/alumno')->with('mensaje', 'Agergado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cursos = Curso::all();
        $jornadas = Jornada::all();
        $alumno=Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno', 'cursos', 'jornadas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosAlumno = request()->except(['_token' , '_method']);

        Alumno::where('id' ,'=' , $id)->update($datosAlumno);
        return redirect('/alumno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Alumno::destroy($id);
        return redirect('/alumno');

    }
}
