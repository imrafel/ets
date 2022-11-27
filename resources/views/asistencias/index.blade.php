
@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="mb-4" >Asistencia de Mecanica Automotriz - Matutina</h3>
    <div class="row justify-content-center">
        <a class="btn btn-success" href="{{ url('/asigna/create')}}" >Matutina</a>
        <a class="btn btn-success" href="{{ url('/asigna/create')}}" >Ve</a>
    </div>
</div>

  @endsection
