
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>

      <div class="col-sm-10">
        <input type="text"  name="nombre" class="form-control" value="{{ @$marca->name}}" id="nombre" placeholder="Nombre" required>
      </div>
    </div>

    <div class="form-group">
      <label for="titulo" class="col-sm-2 control-label">Imagen</label>

      <div class="col-sm-10">
        <input type="file"  name="file" class="form-control"  id="file" placeholder="Imagen" required>
      </div>
    </div>

    @if($marca->file)
   <div class="form-group">
       <div class="col-md-2"></div>
       <div class="col-sm-10">
           <img src="/{{$marca->file}}" width="100">
       </div>
   </div>

    @endif



