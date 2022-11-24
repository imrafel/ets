@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <h3>Editar Alumno</h3>  
        <form class="row g-3" action="{{ url('/alumno/' . $alumno->id ) }}" method="post" enctype="multipart/form-data" >
            @csrf
            {{ method_field('PATCH') }}
            @include('alumnos.form')
        </form>
    </div>
</div>

  @endsection