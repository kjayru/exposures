
    <div class="form-group @if($errors->first('name')) has-error @endif">
        <label for="name" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text"  name="name" class="form-control" value="{{ @$product->name}}" id="name" placeholder="Nombre" required>
            <span class="help-block">{{ $errors->first('name') }}</span>
        </div>
    </div>

    <div class="form-group @if($errors->first('price')) has-error @endif">
      <label for="price" class="col-sm-2 control-label">Precio</label>

      <div class="col-sm-10">
        <input type="number" step="any" name="price" class="form-control" value="{{ @$product->price }}" id="price" placeholder="Precio" required>
        <span class="help-block">{{ $errors->first('price') }}</span>
    </div>
    </div>

    <div class="form-group @if($errors->first('excerpt')) has-error @endif">
      <label for="excerpt" class="col-sm-2 control-label">Descripción corta</label>

      <div class="col-sm-10">
        <textarea class="form-control" name="excerpt" id="excerpt" required> {{ @$product->excerpt}} </textarea>
        <span class="help-block">{{ $errors->first('excerpt') }}</span>
    </div>
    </div>
    <div class="form-group @if($errors->first('description')) has-error @endif">
      <label for="description" class="col-sm-2 control-label">Descripción</label>

      <div class="col-sm-10">
        <textarea class="form-control" name="description" id="description" required> {{ @$product->description}} </textarea>
        <span class="help-block">{{ $errors->first('descripcion') }}</span>
    </div>
    </div>

    <div class="form-group @if($errors->first('title')) has-error @endif">
      <label for="title" class="col-sm-2 control-label">Titulo</label>

      <div class="col-sm-10">
        <input type="text"  name="title" class="form-control" value="{{ @$product->name}}" id="title" placeholder="Titulo" required>
        <span class="help-block">{{ $errors->first('title') }}</span>
    </div>
    </div>

    <!--imagen-->
    @if(!@$product->imagen)
        <div class="form-group @if($errors->first('imagen')) has-error @endif">
            <label for="imagen" class="col-sm-2 control-label">Imagen</label>


            <div class="col-sm-10">
                <input type=file name="imagen"  id="imagen" class="form-control">
                <span class="help-block">{{ $errors->first('imagen') }}</span>
            </div>

        </div>
    @else
        <div class="form-group">

            <label for="imagen" class="col-sm-2 control-label">Imagen</label>

            <div class="col-sm-10">
                <div class="thumbnail">
                    <img src="/storage/{{ @$product->imagen }}"  class="img-thumbnail img-responsive" alt="" srcset="">

                    <a href="#" class="btn-modificar-imagen btn btn-xs btn-primary">Modificar</a>
                </div>

                <input type=file name="imagen"  id="imagen" class=" form-control" style="display: none">
                <span class="help-block">{{ $errors->first('imagen') }}</span>
            </div>

        </div>
    @endif

    <div class="form-group">
            <label for="imagen" class="col-sm-2 control-label">Categoria</label>
        <div class="col-sm-10">
            <select name="category" id="category" class="form-control">
                <option value="">Seleccione</option>
                @foreach($categorias as $category)
                    <option value="{{$category->id}}" @if(@$product->category_id == $category->id) selected @endif>{{ $category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>


