<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Imagenes</h4>
        </div>
        <div class="modal-body">

            @if(@$fotos)
            @foreach ($fotos as $foto)

            <div class="col-md-3 ">
                <div class="thumbnail">
                    <a href="#" class="contenedor thumimg" data-id="{{$foto}}" data-path="{{ $foto}}">
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
          <a class="btn btn-default pull-left seleccionar-thumb" >Agregar</a>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
