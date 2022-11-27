@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2>Asignar Profesores</h2>  
        <form class="row g-3" action="{{ url('/asigna') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @include('asigna.form')
        </form>
    </div>
</div>

@endsection