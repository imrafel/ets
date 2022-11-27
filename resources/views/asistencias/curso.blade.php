
@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="mb-4" >Escoje un curso</h3>
    <div class="row justify-content-center">

        @foreach ($alumnos as $as)
            <a class="btn btn-success" ></a>
        @endforeach
        
    </div>
</div>

  @endsection
