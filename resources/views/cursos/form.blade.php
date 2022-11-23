
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombre del curso</span>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del curso"
        value="{{ isset($curso->nombre)?$curso->nombre:"" }}"
    >
    </div>
</div>


<div class="col-12">
<button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
<a class="btn btn-danger" href="{{ url('/curso')}}" >Cancelar</a>
</div>

