  



@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{ url('/curso/create')}}" >Crear Curso</a>
    <div class="row justify-content-center">
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del curso</th>
                <td scope="col">Opciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($cursos as $curso)
                <tr> 
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>
                        <form action="{{ url('/curso/'. $curso->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete" 
                                class="btn btn-danger" 
                                onclick="return confirm('Seguro quieres eliminar?')" />
                                <a class="btn btn-warning" href="{{ url('/curso/' . $curso->id . '/edit') }}">Edit</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

  @endsection
