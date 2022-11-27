@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <h3>Editar Curso</h3>  
        <form class="row g-3" method="post" enctype="multipart/form-data" >
            
            @include('asigna.form')
        </form>
    </div>
</div>

  @endsection