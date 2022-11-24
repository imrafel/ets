@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-success" href="{{ url('/curso')}}" >Cursos</a>
                            </div>
                            <div class="col">
                                <a class="btn btn-success" href="{{ url('/alumno')}}" >Alumnos</a>
                            </div>
                            <div class="col">
                                <a class="btn btn-success" href="{{ url('/jornada')}}" >Jornadas</a>
                            </div>
                            <div class="col">
                                <a class="btn btn-success" href="{{ url('/asistencia')}}" >Ver Asistencias</a>
                            </div>
                            <div class="col">
                                <a class="btn btn-success" href="{{ url('/asistencia/create')}}" >Agregar Asistencia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
