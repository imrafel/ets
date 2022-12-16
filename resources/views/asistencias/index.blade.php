@extends('layouts.app')

@section('content')

<div class="container">


        <table class="table">
            <tr>
                <th></th>
                <th colspan="4" style="text-align: center">Febrero</th>
                <th colspan="4" style="text-align: center">Marzo</th>
                <th colspan="4" style="text-align: center">Abril</th>
                <th colspan="4" style="text-align: center">Mayo</th>
                <th colspan="4" style="text-align: center">Junio</th>
            </tr>
            <tr>
            @foreach ($productos as $producto => $detalles)
            <td></td>
                @foreach ($detalles as $indice => $valor)
                <td>{{ $indice }} </td>
                @endforeach
            @endforeach
            </tr>

            @foreach ($productos as $producto => $detalles)
            <tr>
            <td>{{ $producto }}</td>
                @foreach ($detalles as $indice => $valor)
                <td>{{ $valor }} </td>
                @endforeach
            </tr>
            @endforeach
        </table>

    {{-- <h3 class="mb-4">Asistencia de Mecanica Automotriz - Matutina</h3> --}}
    {{-- <div class="row justify-content-center">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del alumno</th>
                    <th scope="col">Apellido del alumno</th>
                    <td scope="col">fecha</td>
                    <td scope="col">mes</td>
                    <td scope="col">Asistio</td>
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
                    <td>{{ $as->asistio }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    {{-- <table>
        <tr>
            <th></th>
            <th colspan="4" style="text-align: center">Enero</th>
            <th colspan="4" style="text-align: center">Febrero</th>
            <th colspan="4" style="text-align: center">Marzo</th>
        </tr>
        <tr>
            <th>Nombre Completo</th>
            <th>fecha 1</th>
            <th>fecha 2</th>
            <th>fecha 3</th>
            <th>fecha 4</th>
            <th>fecha 1</th>
            <th>fecha 2</th>
            <th>fecha 3</th>
            <th>fecha 4</th>
            <th>fecha 1</th>
            <th>fecha 2</th>
            <th>fecha 3</th>
            <th>fecha 4</th>
        </tr>
        <tr>
            <td>Vimal</td>
            <td>Si</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>Si</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>Si</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>

        </tr>
        <tr>
            <td>Mike</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
        </tr>
        <tr>
            <td>Shane</td>
            <td>Si</td>
            <td>Si</td>
            <td>Si</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
        </tr>
        <tr>
            <td>manuel</td>
            <td>Si</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
            <td>No</td>
            <td>Si</td>
        </tr>
    </table>
</div> --}}
{{-- </div> --}}

@endsection