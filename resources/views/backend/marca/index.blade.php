@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Marcas menu
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Marcas</li>
          </ol>
        </section>

        <section class="content">

          <div class="row">

            @if(session('info'))
                <div class="alert alert-success">
                    {{ session('info')}}
                </div>
            @endif
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Marcas</h3>
                  <a href="{{route('marca.created')}}" class="btn btn-xs btn-primary pull-right">Crear Marca</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">



                    <ol class="lista1">
                        @foreach($marcas as $k => $item)

                            @if ($item['parent_id'] != 0)
                                @break
                            @endif

                            @include('layouts.backend.include.marca-item', ['item' => $item])

                        @endforeach
                    </ol>


                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        </section>
      </div>


      <div class="modal modal-danger fade in" id="delobjeto">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="delete-objeto" action="/admin/categories/delete" method="POST">
                        @csrf
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Confirmar Eliminación</h4>
                            </div>
                            <div class="modal-body text-center">
                                    <input type="hidden" name="_method" value="delete" >

                                    <input type="hidden" name="id" id="id">
                                    <p>¿Esta seguro de eliminar este item?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left " data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-outline" >Eliminar</button>
                            </div>
                        </form>
                </div>
                <!-- /.modal-content -->
            </div>
    </div>


@endsection
