  



@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{ url('/jornada/create')}}" >Crear Jornada</a>
    <div class="row justify-content-center">
        
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jornada</th>
                <td scope="col">Opciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($jornadas as $jor)
                <tr> 
                    <td>{{ $jor->id }}</td>
                    <td>{{ $jor->nombre }}</td>
                    <td>
                        <form action="{{ url('/jornada/'. $jor->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete" 
                                class="btn btn-danger" 
                                onclick="return confirm('Seguro quieres eliminar?')" />
                                <a class="btn btn-warning" href="{{ url('/jornada/' . $jor->id . '/edit') }}">Edit</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

  @endsection
