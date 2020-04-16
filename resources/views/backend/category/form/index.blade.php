
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

    <div class="form-group">
        <label for="parent" class="col-sm-2 control-label">Seleccione una categoría padre</label>
        <div class="col-sm-10">
            <select name="categoria" id="categoria" class="form-control">
                <option value="">Seleccione</option>
                @foreach($categorias as $cat)
                 <option value="{{$cat->id}}" @if(@$cat->id == @$categoria->parent_id) selected @endif>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="orden" class="col-sm-2 control-label">Orden</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="order" value="{{@$categoria->order }}" id="order" placeholder="Orden" required>
        </div>
    </div>
