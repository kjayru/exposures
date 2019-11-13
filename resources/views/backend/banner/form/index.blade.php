
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>

      <div class="col-sm-10">
        <input type="text"  name="nombre" class="form-control" value="{{ @$banner->name}}" id="nombre" placeholder="Nombre" required>
      </div>
    </div>

<fieldset><legend>Sliders items</legend>
<a href="#" data-slideid="{{ @$banner->id }}" class="btn btn-primary btn-add-slide">Agregar Slide</a>
<hr>
</fieldset>
    <!-- loop banner-->
    <div class="canva-slide">
        @foreach($banner->slideitems as $key=> $items)
            <input type="hidden" name="item_id[]" value="{{ @$items->id }}">
            <a href="#" class="btn btn-danger btn-delete-slide" data-id="{{ @$items->id  }}"><i class="fa fa-times" aria-hidden="true"></i></a>
            <div class="form-group">

                <!--imagen-->
                @if(@$items->imagen)
                    <div class="form-group">

                        <label for="imagen" class="col-sm-2 control-label">Imagen</label>

                        <div class="col-sm-10">
                            <div class="thumbnail">
                                    <div class="prodimages{{$key+1}}">
                                            <img src="/storage/{{ @$items->imagen }}"  class="img-thumbnail img-responsive" alt="" srcset="">
                                    </div>

                                    <input type="hidden" name="imagen[]" value="{{ @$items->imagen }}">

                            </div>
                            <a class="btn btn-success btn-seleccionar-imagen" data-key="{{$key+1}}" data-toggle="modal" data-target="#modal-slides">Modificar Imagen</a>

                            <span class="help-block">{{ $errors->first('imagen') }}</span>
                        </div>

                    </div>

                @else
                    <div class="form-group @if($errors->first('multimedia_id')) has-error @endif">
                        <label for="imagen" class="col-sm-2 control-label">Imagen</label>


                        <div class="col-sm-10">
                            <a class="btn btn-success btn-seleccionar-imagen" data-key="{{$key+1}}" data-toggle="modal" data-target="#modal-slides">Seleccionar Imagen</a>

                            <span class="help-block">{{ $errors->first('multimedia_id') }}</span>

                            <div class="prodimages{{$key+1}}"></div>
                        </div>

                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="titulo" class="col-sm-2 control-label">Url</label>

                <div class="col-sm-10">
                    <input type="text"  name="link[]" class="form-control" value="{{ @$items->link }}" id="titulo" placeholder="Titulo" required>
                </div>
            </div>

            <div class="form-group">
                <label for="titulo" class="col-sm-2 control-label">Destino</label>

                <div class="col-sm-10">
                    <input type="text"  name="target[]" class="form-control" value="{{ @$items->target }}" id="titulo" placeholder="Titulo" required>
                </div>
            </div>

            <div class="form-group">
                <label for="titulo" class="col-sm-2 control-label">Orden</label>

                <div class="col-sm-10">
                    <input type="text"  name="order[]" class="form-control" value="{{ @$items->order }}" id="titulo" placeholder="Titulo" required>
                </div>
            </div>
            <hr>
        @endforeach
    </div>



    <div class="modal fade" id="modal-slides">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Imagenes Slide</h4>
                </div>
                <div class="modal-body">
                    @if(@$images)
                    @foreach ($images as $foto)

                    <div class="col-md-3 ">
                        <div class="thumbnail">
                            <a href="#" class="contenedor thumimg-slide"  data-path="{{ $foto }}">
                                <img src="/storage/{{ $foto}}" class="img-responsive">
                                <div class="boxmark">
                                    <span ></span>
                                </div>
                            </a>
                        </div>
                      </div>
                    @endforeach
                    @endif
                </div>
                <div class="modal-footer">
                  <a class="btn btn-default pull-left seleccionar-slide" data-key="" >Agregar Slide</a>

                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
    </div>
