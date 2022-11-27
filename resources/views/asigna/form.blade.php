
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Profesor</span>
        <select class="form-select" name="user_id">
            <option value=""  >--Select--</option>
            @foreach($profes as $profe)
            <option value="{{$profe->id}}" {{ $profe ? 'selected' : '' }}> {{ $profe->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombre del curso</span>
        <select class="form-select" name="curso_id">
            <option value=""  >--Select--</option>
            @foreach($cursos as $curso)
            <option value="{{$curso->id}}" {{ $curso ? 'selected' : '' }}> {{ $curso->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Jornada</span>
        <select class="form-select" name="jornada_id">
            <option value=""  >--Select--</option>
            @foreach($jornadas as $jor)
            <option value="{{$jor->id}}" {{ $jor ? 'selected' : '' }}> {{ $jor->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="col-12">
<button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
<a class="btn btn-danger" href="{{ url('/asigna')}}" >Cancelar</a>
</div>

