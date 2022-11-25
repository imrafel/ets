  



@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{ url('/alumno/create')}}" >Agregar Alumno</a>
    <div class="row  justify-content-center">
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">T U</th>
                <th scope="col">Carne</th>
                <th scope="col">Carrera Tecnica</th>
                <th>Jornada</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Email</th>
                <th>Mensualidad</th>
                <th>Inscrito por:</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($alumnos as $al)
                <tr> 
                    <td>{{ $al->id }}</td>
                    <td>
                        @if ( $al->TU  == 1 )
                            Si
                            @else
                            No
                        @endif
                    </td>
                    
                    <td>{{ $al->carne}}</td>
                    <td>{{ $al->curso->nombre }}</td>
                    <td>{{ $al->jornada->nombre }}</td>
                    <td>{{ $al->apellido }}</td>
                    <td>{{ $al->nombre }}</td>
                    <td>{{ $al->email }}</td>
                    <td>{{ $al->movil }}</td>
                    <td>Q {{ $al->mensualidad }}.00</td>
                    <td>{{ $al->razonamiento }}</td>
                    <td>
                        <form action="{{ url('/alumno/'. $al->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar" 
                                class="btn btn-danger" 
                                onclick="return confirm('Seguro quieres eliminar?')" />
                                <a class="btn btn-warning" href="{{ url('/alumno/' . $al->id . '/edit') }}">Editar</a>
                                <a class="btn btn-primary" href="{{ url('/alumno/' . $al->id) }}">Ver Detalle</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

  @endsection
