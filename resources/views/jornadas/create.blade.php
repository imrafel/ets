@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2>Agregar Jornada</h2>  
        <form class="row g-3" action="{{ url('/jornada') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @include('jornadas.form')
        </form>
    </div>
</div>

@endsection