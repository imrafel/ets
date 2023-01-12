@extends('layouts.app')

@section('content')

<div class="container">

  <h3>Mecanica Automotriz</h3>

  <div class="row justify-content-center">

    <form action="{{ url('/asistencia') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="text" value="Febrero" name="mes">
      <input type="text" name="dia" placeholder="dia">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">jornada</th>
            <th scope="col">Fecha: 25 </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alumnos as $al)
          <tr>
            <td hidden><input type="text" value="{{ $al->id }}" class="form-control" name="id[]"></td>
            <td><input type="text" value="{{ $al->nombre }}" class="form-control" name="nombre[]"></td>
            <td><input type="text" value="{{ $al->apellido }}" class="form-control" name="apellido[]"></td>
            <td><input type="text" value="{{ $al->jornada->nombre }}" class="form-control" name="jornada_id[]"></td>
            <td>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Si" name="asistio[]">
                <label class="form-check-label" for="inlineCheckbox1">Si</label>
              </div>
            </td>
          </tr>
          @endforeach
          <tr>
          </tr>
        </tbody>
      </table>
      <button type="submit" class="btn btn-success" value="Enviar">Subir Asistencias</button>
    </form>
  </div>

</div>


@endsection