
<div class="col-md-6">
    <label for="nombre" class="form-label">Nombre del Curso</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del curso"
        value="{{ isset($curso->nombre)?$curso->nombre:"" }}"
    >
</div>
<div class="col-12">
<button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
<a class="btn btn-danger" href="{{ url('/curso')}}" >Cancelar</a>
</div>
