  



@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{ url('/asigna/create')}}" >Asignar Profesor</a>
    <div class="row justify-content-center">
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nombre del profesor</th>
                <th scope="col">Nombre del curso</th>
                <th scope="col">Jornada</th>
                <td scope="col">Opciones</td>
            </tr>
            </thead>
            <tbody>
                @foreach ($asignaciones as $asi)
                <tr> 
                    <td>{{ $asi->user->name }}</td>
                    <td>{{ $asi->curso->nombre }}</td>
                    <td>{{ $asi->jornada->nombre }}</td>
                    <td>
                        <form action="{{ url('/asignar/'. $asi->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete" 
                                class="btn btn-danger" 
                                onclick="return confirm('Seguro quieres eliminar?')" />
                                {{-- <a class="btn btn-warning" href="{{ url('/curso/' . $curso->id . '/edit') }}">Edit</a> --}}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

  @endsection
