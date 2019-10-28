
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>

      <div class="col-sm-10">
        <input type="text"  name="nombre" class="form-control" value="{{ @$categoria->name}}" id="nombre" placeholder="Nombre" required>
      </div>
    </div>

    <div class="form-group">
      <label for="titulo" class="col-sm-2 control-label">Titulo</label>

      <div class="col-sm-10">
        <input type="text"  name="titulo" class="form-control" value="{{ @$categoria->title }}" id="titulo" placeholder="Titulo" required>
      </div>
    </div>
