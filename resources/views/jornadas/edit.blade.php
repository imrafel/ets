@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <h3>Editar Curso</h3>  
        <form class="row g-3" action="{{ url('/curso/' . $curso->id ) }}" method="post" enctype="multipart/form-data" >
            @csrf
            {{ method_field('PATCH') }}
            @include('cursos.form')
        </form>
    </div>
</div>

  @endsection