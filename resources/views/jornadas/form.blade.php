
<div class="col-md-6">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Jornada</span>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Jornada"
        value="{{ isset($jornada->nombre)?$jornada->nombre:"" }}"
    >
    </div>
</div>


<div class="col-12">
<button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
<a class="btn btn-danger" href="{{ url('/jornada')}}" >Cancelar</a>
</div>

