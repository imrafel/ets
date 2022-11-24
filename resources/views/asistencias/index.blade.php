  



@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="mb-4" >Asistencia de Mecanica Automotriz - Matutina</h3>
    <div class="row justify-content-center">
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del alumno</th>
                <th scope="col">Apellido del alumno</th>
                <td scope="col">fecha</td>
                <td scope="col">mes</td>
                {{-- <td scope="col">Opciones</td> --}}
            </tr>
            </thead>
            <tbody>
            @foreach ($asistencias as $as)
                <tr> 
                    <td>{{ $as->id }}</td>
                    <td>{{ $as->alumno->nombre}}</td>
                    <td>{{ $as->alumno->apellido }}</td>
                    <td>{{ $as->fecha }}</td>
                    <td>{{ $as->mes }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

  @endsection
