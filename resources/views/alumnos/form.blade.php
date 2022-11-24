
@if(count($errors)>0)
   <div class="alert alert-danger" role="alert"  >
    faltan algunos datos
   </div>
@endif



<div class="col-2" > 
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">TU</span>
        <select class="form-select" aria-label="Default select example" name="TU"  >
            <option selected> {{ isset($alumno->TU)?$alumno->TU:old('TU') }}</option>
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
    </div>

</div>

<div class="col-6">
    <div class="input-group mb-2">
    <span class="input-group-text" id="inputGroup-sizing-default">Carrera Tecnica </span>
    <select class="form-select" name="curso_id">
        <option value=""  >--Select--</option>
        @foreach($cursos as $curso)
        <option value="{{$curso->id}}" {{ $curso ? 'selected' : '' }}> {{ $curso->nombre }}</option>
        @endforeach
    </select>
    </div>
</div>


<div class="col-4">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Jornada </span>
        <select class="form-select" name="jornada_id">
            <option value=""  >--Select--</option>
            @foreach($jornadas as $jornada)
            <option value="{{$jornada->id}}" {{ $jornada ? 'selected' : '' }}> {{ $jornada->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-2">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Edad</span>
    <input type="number" class="form-control" name="edad" id="edad" 
        placeholder="Edad"
        value="{{ isset($alumno->edad)?$alumno->edad:old('edad') }}"
    >
    </div>
</div>



<div class="col-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Alumno de ingreso:</span>
    <input type="text" class="form-control" name="ingreso" id="ingreso" 
        placeholder="Ingreso"
        value="{{ isset($alumno->ingreso)?$alumno->ingreso:old('ingreso') }}"
    >
    </div>
</div>
<div class="col-4">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">No. de Carne</span>
    <input type="text" class="form-control" name="carne" id="carne" 
        placeholder="Numero de Carne"
        value="{{ isset($alumno->carne)?$alumno->carne:old('carne') }}"
    >
    </div>
</div>



<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombres </span>
    <input type="text" class="form-control" name="nombre" id="nombre" 
        placeholder="Nombres"
        value="{{ isset($alumno->nombre)?$alumno->nombre:old('nombre')}}"
    >
    </div>
</div>

<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
    <input type="text" class="form-control" name="apellido" id="apellido" 
        placeholder="Apellidos"
        value="{{ isset($alumno->apellido)?$alumno->apellido:old('apellido')}}"
    >
    </div>
</div>




<div class="col-md-12">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Direccion </span>
    <input type="text" class="form-control" name="direccion" id="direccion" 
        placeholder="Direccion"
        value="{{ isset($alumno->direccion)?$alumno->direccion:old('direccion') }}"
    >
    </div>
</div>


<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Departamento </span>
    <input type="text" class="form-control" name="departamento" id="departamento" 
        placeholder="Departamento"
        value="{{ isset($alumno->departamento)?$alumno->departamento:old('departamento')}}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Municipio </span>
    <input type="text" class="form-control" name="municipio" id="municipio" 
        placeholder="Municipio"
        value="{{ isset($alumno->municipio)?$alumno->municipio:old('municipio') }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Telefono Movil</span>
    <input type="text" class="form-control" name="movil" id="movil" 
        placeholder="Telefono Movil"
        value="{{ isset($alumno->movil)?$alumno->movil:old('movil') }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Telefono de Casa </span>
    <input type="text" class="form-control" name="casa" id="casa" 
        placeholder="Telefono de Casa"
        value="{{ isset($alumno->casa)?$alumno->casa:old('casa') }}"
    >
    </div>
</div>


<div class="col-md-12">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Correo Electronico</span>
    <input type="text" class="form-control" name="email" id="email" 
        placeholder="Email / Correo Electronico"
        value="{{ isset($alumno->email)?$alumno->email:old('email') }}"
    >
    </div>
</div>



<div class="col-2" > 
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Vehiculo:</span>
    <select class="form-select" aria-label="Default select example" name="vehiculo" >
        <option selected> {{ isset($alumno->vehiculo)?$alumno->vehiculo:old('vehiculo') }}</option>
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    </div>
</div>
<div class="col-6" > 
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Tipo de Vehiculo</span> 
    <select class="form-select" aria-label="Default select example" name="tipoVehiculo" >
        <option selected> {{ isset($alumno->tipoVehiculo)?$alumno->tipoVehiculo:old('tipoVehiculo') }}</option>
        <option value="Carro">Carro</option>
        <option value="Moto">Moto</option>
    </select>
    </div>
</div>
<div class="col-md-4">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Placas</span>
    <input type="text" class="form-control" name="placas" id="placas" 
        placeholder="Placas"
        value="{{ isset($alumno->placas)?$alumno->placas:old('placas') }}"
    >
    </div>
</div>




<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Como se entero de kinal</span>
    <input type="text" class="form-control" name="kinal" id="kinal" 
        placeholder="Como se entero de kinal"
        value="{{ isset($alumno->kinal)?$alumno->kinal:old('kinal') }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Parentesco</span>
    <input type="text" class="form-control" name="parentesco" id="parentesco" 
        placeholder="Parentesco"
        value="{{ isset($alumno->parentesco)?$alumno->parentesco:old('parentesco') }}"
    >
    </div>
</div>




<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Ultimo grado aprobado</span>
    <input type="text" class="form-control" name="ultimoGrado" id="ultimoGrado" 
        placeholder="Ultimo grado cursado"
        value="{{ isset($alumno->ultimoGrado)?$alumno->ultimoGrado:old('ultimoGrado') }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombre de quien lo recomienda</span>
    <input type="text" class="form-control" name="recomendacion" id="recomendacion" 
        placeholder="Nombre de quien lo recomienda"
        value="{{ isset($alumno->recomendacion)?$alumno->recomendacion:old('recomendacion')}}"
    >
    </div>
</div>


<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Empresa donde labora</span>
    <input type="text" class="form-control" name="empresa" id="empresa" 
        placeholder="Empresa donde labora:"
        value="{{ isset($alumno->empresa)?$alumno->empresa:old('empresa') }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Puesto que desempena</span>
    <input type="text" class="form-control" name="puesto" id="puesto" 
        placeholder="Puesto que desempena"
        value="{{ isset($alumno->puesto)?$alumno->puesto:old('puesto')}}"
    >
    </div>
</div>

<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Direcion de la empresa</span>
    <input type="text" class="form-control" name="direccionEmpresa" id="direccionEmpresa" 
        placeholder="Direccion de la Empresa"
        value="{{ isset($alumno->direccionEmpresa)?$alumno->direccionEmpresa:old('direccionEmpresa') }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Telefono de la Empresa</span>
    <input type="text" class="form-control" name="telEmpresa" id="telEmpresa" 
        placeholder="Telefono de la Empresa"
        value="{{ isset($alumno->telEmpresa)?$alumno->telEmpresa:old('telEmpresa') }}"
    >
    </div>
</div>
<div class="col-3" > 
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">La empresa le paga los estudios?</span>
    <select class="form-select" aria-label="Default select example" name="empresaPaga" >
        <option selected> {{ isset($alumno->empresaPaga)?$alumno->empresaPaga:old('empresaPaga') }}</option>
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Recibo a nombre de:</span>
    <input type="text" class="form-control" name="recibo" id="recibo" 
        placeholder="Recibo a nombre de:"
        value="{{ isset($alumno->recibo)?$alumno->recibo:old('recibo') }}"
    >
    </div>
</div>
<div class="col-md-3">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nit</span>
    <input type="text" class="form-control" name="nit" id="nit" 
        placeholder="Nit"
        value="{{ isset($alumno->nit)?$alumno->nit:old('nit') }}"
    >
    </div>
</div>


<div class="col-md-4">
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Inscripcion</span>
    <input type="text" class="form-control" name="inscripcion" id="inscripcion" 
        placeholder="inscripcion"
        value="{{ isset($alumno->inscripcion)?$alumno->inscripcion:old('inscripcion') }}"
    >
    </div>
</div>
<div class="col-md-4">
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Mensualidades</span>
    <input type="text" class="form-control" name="mensualidad" id="mensualidad" 
        placeholder="Mensualidad"
        value="{{ isset($alumno->mensualidad)?$alumno->mensualidad:old('mensualidad') }}"
    >
    </div>
</div>
<div class="col-md-4">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Forma de pago</span>
    <input type="text" class="form-control" name="formaPago" id="formaPago" 
        placeholder="Forma de Pago"
        value="{{ isset($alumno->formaPago)?$alumno->formaPago:old('formaPago') }}"
    >
    </div>
</div>

<div class="col-md-4">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Duracion:</span>
    <input type="text" class="form-control" name="duracion" id="duracion" 
    placeholder="Durante:"
    value="{{ isset($alumno->duracion)?$alumno->duracion:old('duracion')}}"
    >
    </div>
</div>
<div class="col-md-4">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Meses</span>
    <input type="text" class="form-control" name="meses" id="meses" 
    placeholder="Meses"
    value="{{ isset($alumno->meses)?$alumno->meses:old('meses') }}"
    >
    </div>
</div>
<div class="col-md-4"><div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Razonamiento / Inscrito por:</span>
    <input type="text" class="form-control" name="razonamiento" id="razonamiento" 
        placeholder="Razonamiento / Inscrito por:"
        value="{{ isset($alumno->razonamiento)?$alumno->razonamiento:old('razonamiento') }}"
    >
    </div>
</div>

<div class="col-12 mb-5">
<button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
<a class="btn btn-danger" href="{{ url('/alumno')}}" >Cancelar</a>
</div>
