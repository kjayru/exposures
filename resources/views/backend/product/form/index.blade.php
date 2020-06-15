
    <div class="form-group @if($errors->first('name')) has-error @endif">
        <label for="name" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text"  name="name" class="form-control" value="{{ @$product->name}}" id="name" placeholder="Nombre" required>
            <span class="help-block">{{ $errors->first('name') }}</span>
        </div>
    </div>

    <!--<div class="form-group @if($errors->first('name')) has-error @endif">
        <label for="name" class="col-sm-2 control-label">Título</label>
        <div class="col-sm-10">
            <input type="text"  name="title" class="form-control" value="{{ @$product->title}}" id="title" placeholder="Título" required>
            <span class="help-block">{{ $errors->first('title') }}</span>
        </div>
    </div>-->

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




<!--categorias-->
<div class="form-group">
    <label for="excerpt" class="col-sm-2 control-label">Categorias</label>


        <!--categorias-->
     <div class="col-sm-10">


        <ol>
            @foreach(@$categories as $k => $item)

                @if ($item['parent_id'] != 0)
                    @break
                @endif

                @include('layouts.backend.include.category-input', ['item' => $item])

            @endforeach
         </ol>
    </div>
</div>


<!--categorias-->
<div class="form-group">
    <label for="excerpt" class="col-sm-2 control-label">Marcas</label>


        <!--categorias-->
     <div class="col-sm-10">


        <ol>
            @foreach(@$marcas as $k => $item)

                @if ($item['parent_id'] != 0)
                    @break
                @endif

                @include('layouts.backend.include.marca-input', ['item' => $item])

            @endforeach
         </ol>
    </div>
</div>


    <!--<div class="form-group">
        <label for="parent" class="col-sm-2 control-label">Marca</label>
        <div class="col-sm-10">
            <select name="marca" id="marca" class="form-control">
                <option value="">Seleccione</option>
                foreach($marcas as $cat)
                // <option value="{{@$cat->id}}" @if(@$cat->id == @$marca->parent_id) selected @endif>{{ @$cat->name }}</option>
                endforeach
            </select>
        </div>
    </div>-->




    <div class="form-group @if($errors->first('excerpt')) has-error @endif">
            <label for="excerpt" class="col-sm-2 control-label">Outlet</label>

            <div class="col-sm-10">
                    <div class="checkbox">
                            <label>
                              <input type="checkbox" name="outlet" id="outlet" value="1" {{ @$product->outlet ? 'checked' : '' }}>
                            </label>
                    </div>
              <span class="help-block">{{ $errors->first('excerpt') }}</span>
          </div>
    </div>

    <fieldset> <legend>Galeria producto</legend></fieldset>
        <div class="form-group text-center">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
               Seleccionar imagenes
            </button>
        </div>
        <div class="prodimages">
        @if(@$galerias)
           @foreach($galerias as $foto)
            <div class="col-md-2 ">
                <img src="/storage/{{ $foto->imagen}}" class="thumbnail" width="70">
            </div>
            @endforeach
        @endif
        </div>






