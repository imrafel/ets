<?php

namespace App\Http\Controllers;

use App\Models\Asigna;
use App\Models\User;
use App\Models\Curso;
use App\Models\Jornada;
use Illuminate\Http\Request;

class AsignaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $asignaciones = Asigna::all();



        return view('asigna.index', compact('asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profes = User::where('role' , 'profe')->get();
        $cursos = Curso::all();
        $jornadas = Jornada::all();

        return view('asigna.create', compact('profes', 'cursos', 'jornadas'));
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
        
        $datosAsignar= request()->except('_token');

        Asigna::insert($datosAsignar);

        return redirect('/asigna');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asigna  $asigna
     * @return \Illuminate\Http\Response
     */
    public function show(Asigna $asigna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asigna  $asigna
     * @return \Illuminate\Http\Response
     */
    public function edit(Asigna $asigna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asigna  $asigna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asigna $asigna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asigna  $asigna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asigna $asigna)
    {
        //
    }
}
