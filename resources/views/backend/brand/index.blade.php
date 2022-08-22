@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Marcas
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Marcas</li>
          </ol>
        </section>

        <section class="content">

          <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Marcas</h3>
                  <a href="{{route('brand.created')}}" class="btn btn-xs btn-primary pull-right">Crear Marca</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Nombre</th>
                      <th>Imagen</th>

                      <th></th>
                    </tr>
                    </thead>
                    <tbody>

                      @foreach($marcas as $key=>$marca)
                      <tr>
                      <th>{{ $key+1}}</th>
                      <td>{{$marca->name}}</td>
                      <td>
                        <img src="/storage/{{$marca->file }}" width="100" class="img-responsive">
                    </td>

                      <td>
                        <a href="{{ route('brand.edit',['id'=>$marca->id]) }}" class="btn btn-xs btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                        <a href="#" data-id="{{ $marca->id }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete"><i class="fa fa-fw fa-trash"></i></a>
                    </td>
                    </tr>
                      @endforeach

                    </tbody>
                  </table>
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
                    <form class="delete-objeto" action="/admin/brands/delete" method="POST">
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
