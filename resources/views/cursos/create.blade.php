@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2>Creacion de Cursos</h2>  
        <form class="row g-3" action="{{ url('/curso') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @include('cursos.form')
        </form>
    </div>
</div>

@endsection