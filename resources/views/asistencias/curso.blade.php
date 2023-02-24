@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($cursos as $curso)
        <form action="{{ url('/asistencia/create') }}" method="POST">
            @csrf
            {{ method_field('GET') }}
            <div class="col">
                <button type="submit" class="btn btn-success">{{ $curso->curso->nombre }} {{ $curso->jornada->id }}</button>
            </div>
            @endforeach
        </form>
    </div>
</div>


@endsection