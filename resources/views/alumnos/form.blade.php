
<div class="col-2" > 
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">TU</span>
        <select class="form-select" aria-label="Default select example" name="TU"  >
            <option selected> {{ isset($al->TU)?$al->TU:old('TU') }}</option>
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
    </div>

</div>

<div class="col-6">
    <div class="input-group mb-2">
    <span class="input-group-text" id="inputGroup-sizing-default">Carrera Tecnica </span>
    <input type="text" class="form-control" name="curso" id="curso" 
        placeholder="Nombre del curso"
        value="{{ isset($al->curso)?$al->curso:"" }}"
    >
    </div>
</div>


<div class="col-4">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Jornada </span>
    <input type="text" class="form-control" name="jornada" id="jornada" 
        placeholder="Jornada"
        value="{{ isset($al->jornada)?$al->jornada:"" }}"
    >
    </div>
</div>
<div class="col-2">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Edad</span>
    <input type="number" class="form-control" name="edad" id="edad" 
        placeholder="Edad"
        value="{{ isset($al->edad)?$al->edad:"" }}"
    >
    </div>
</div>



<div class="col-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Alumno de ingreso:</span>
    <input type="text" class="form-control" name="ingreso" id="ingreso" 
        placeholder="Ingreso"
        value="{{ isset($al->ingreso)?$al->ingreso:"" }}"
    >
    </div>
</div>
<div class="col-4">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">No. de Carne</span>
    <input type="text" class="form-control" name="carne" id="carne" 
        placeholder="Numero de Carne"
        value="{{ isset($al->carne)?$al->carne:"" }}"
    >
    </div>
</div>



<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombres </span>
    <input type="text" class="form-control" name="nombre" id="nombre" 
        placeholder="Nombres"
        value="{{ isset($al->nombre)?$al->nombre:"" }}"
    >
    </div>
</div>

<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Apellidos</span>
    <input type="text" class="form-control" name="apellido" id="apellido" 
        placeholder="Apellidos"
        value="{{ isset($al->apellido)?$al->apellido:"" }}"
    >
    </div>
</div>




<div class="col-md-12">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Direccion </span>
    <input type="text" class="form-control" name="direccion" id="direccion" 
        placeholder="Direccion"
        value="{{ isset($al->direccion)?$al->direcicon:"" }}"
    >
    </div>
</div>


<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Departamento </span>
    <input type="text" class="form-control" name="departamento" id="departamento" 
        placeholder="Departamento"
        value="{{ isset($al->departamento)?$al->departamento:"" }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Municipio </span>
    <input type="text" class="form-control" name="municipio" id="municipio" 
        placeholder="Municipio"
        value="{{ isset($al->municipio)?$al->municipio:"" }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Telefono Movil</span>
    <input type="text" class="form-control" name="movil" id="movil" 
        placeholder="Telefono Movil"
        value="{{ isset($al->movil)?$al->movil:"" }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Telefono de Casa </span>
    <input type="text" class="form-control" name="casa" id="casa" 
        placeholder="Telefono de Casa"
        value="{{ isset($al->casa)?$al->casa:"" }}"
    >
    </div>
</div>


<div class="col-md-12">
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Correo Electronico</span>
    <input type="text" class="form-control" name="email" id="email" 
        placeholder="Email / Correo Electronico"
        value="{{ isset($al->email)?$al->email:"" }}"
    >
    </div>
</div>



<div class="col-2" > 
    <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Vehiculo:</span>
    <select class="form-select" aria-label="Default select example" name="vehiculo" >
        <option selected> {{ isset($al->vehiculo)?$al->vehiculo:old('vehiculo') }}</option>
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    </div>
</div>
<div class="col-6" > 
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Tipo de Vehiculo</span> 
    <select class="form-select" aria-label="Default select example" name="tipoVehiculo" >
        <option selected> {{ isset($al->tipoVehiculo)?$al->tipoVehiculo:old('tipoVehiculo') }}</option>
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
        value="{{ isset($al->placas)?$al->placas:"" }}"
    >
    </div>
</div>




<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Como se entero de kinal</span>
    <input type="text" class="form-control" name="kinal" id="kinal" 
        placeholder="Como se entero de kinal"
        value="{{ isset($al->kinal)?$al->kinal:"" }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Parentesco</span>
    <input type="text" class="form-control" name="parentesco" id="parentesco" 
        placeholder="Parentesco"
        value="{{ isset($al->parentesco)?$al->parentesco:"" }}"
    >
    </div>
</div>




<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Ultimo grado aprobado</span>
    <input type="text" class="form-control" name="ultimoGrado" id="ultimoGrado" 
        placeholder="Ultimo grado cursado"
        value="{{ isset($al->ultimoGrado)?$al->ultimoGrado:"" }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombre de quien lo recomienda</span>
    <input type="text" class="form-control" name="recomendacion" id="recomendacion" 
        placeholder="Nombre de quien lo recomienda"
        value="{{ isset($al->recomendacion)?$al->recomendacion:"" }}"
    >
    </div>
</div>


<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Empresa donde labora</span>
    <input type="text" class="form-control" name="empresa" id="empresa" 
        placeholder="Empresa donde labora:"
        value="{{ isset($al->empresa)?$al->empresa:"" }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Puesto que desempena</span>
    <input type="text" class="form-control" name="puesto" id="puesto" 
        placeholder="Puesto que desempena"
        value="{{ isset($al->puesto)?$al->puesto:"" }}"
    >
    </div>
</div>

<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Direcion de la empresa</span>
    <input type="text" class="form-control" name="direccionEmpresa" id="direccionEmpresa" 
        placeholder="Direccion de la Empresa"
        value="{{ isset($al->direccionEmpresa)?$al->direccionEmpresa:"" }}"
    >
    </div>
</div>
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Telefono de la Empresa</span>
    <input type="text" class="form-control" name="telEmpresa" id="telEmpresa" 
        placeholder="Telefono de la Empresa"
        value="{{ isset($al->telEmpresa)?$al->telEmpresa:"" }}"
    >
    </div>
</div>
<div class="col-3" > 
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">La empresa le paga los estudios?</span>
    <select class="form-select" aria-label="Default select example" name="empresaPaga" >
        <option selected> {{ isset($al->empresaPaga)?$al->empresaPaga:old('empresaPaga') }}</option>
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
        value="{{ isset($al->recibo)?$al->recibo:"" }}"
    >
    </div>
</div>
<div class="col-md-3">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nit</span>
    <input type="text" class="form-control" name="nit" id="nit" 
        placeholder="Nit"
        value="{{ isset($al->nit)?$al->nit:"" }}"
    >
    </div>
</div>


<div class="col-md-4">
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Inscripcion</span>
    <input type="text" class="form-control" name="inscripcion" id="inscripcion" 
        placeholder="inscripcion"
        value="{{ isset($al->inscripcion)?$al->inscripcion:"" }}"
    >
    </div>
</div>
<div class="col-md-4">
    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Mensualidades</span>
    <input type="text" class="form-control" name="mensualidad" id="mensualidad" 
        placeholder="Mensualidad"
        value="{{ isset($al->mensualidad)?$al->mensualidad:"" }}"
    >
    </div>
</div>
<div class="col-md-4">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Forma de pago</span>
    <input type="text" class="form-control" name="formaPago" id="formaPago" 
        placeholder="Forma de Pago"
        value="{{ isset($al->formaPago)?$al->formaPago:"" }}"
    >
    </div>
</div>

<div class="col-md-4">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Duracion:</span>
    <input type="text" class="form-control" name="duracion" id="duracion" 
    placeholder="Durante:"
    value="{{ isset($al->duracion)?$al->duracion:"" }}"
    >
    </div>
</div>
<div class="col-md-4">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Meses</span>
    <input type="text" class="form-control" name="meses" id="meses" 
    placeholder="Meses"
    value="{{ isset($al->meses)?$al->meses:"" }}"
    >
    </div>
</div>
<div class="col-md-4"><div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Razonamiento / Inscrito por:</span>
    <input type="text" class="form-control" name="razonamiento" id="razonamiento" 
        placeholder="Razonamiento / Inscrito por:"
        value="{{ isset($al->razonamiento)?$al->razonamiento:"" }}"
    >
    </div>
</div>

<div class="col-12 mb-5">
<button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
<a class="btn btn-danger" href="{{ url('/alumno')}}" >Cancelar</a>
</div>
