@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h3>Agregar Alumno</h3>  
        <form class="row g-3" action="{{ url('/alumno') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @include('alumnos.form')
        </form>
    </div>
</div>

@endsection