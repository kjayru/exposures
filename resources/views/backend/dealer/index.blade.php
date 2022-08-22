@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Distribuidores

          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Distribuidores</li>
          </ol>
        </section>


        <section class="content">



          <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Distribuidores</h3>
                  <a href="{{ route('dealer.created')}}" class="btn btn-primary pull-right">Crear</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <table id="distribuidores" class="table table-bordered">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Nombre</th>
                      <th>Subtitulo</th>
                      <th>Direccion</th>
                      <th>Teléfono</th>
                      <th>Email</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($dealers as $k => $dealer)
                    <tr>
                      <td>{{$k+1}}</td>

                      <td> {{@$dealer->name}} </td>
                      <td> {{@$dealer->subtitle}} </td>
                      <td> {{@$dealer->address}} </td>
                      <td> {{@$dealer->phone}} </td>
                      <td> {{@$dealer->email}} </td>
                      <td width="6%">
                        <a href="{{ route('dealer.edit',['id'=>$dealer->id])}}" class="btn btn-xs btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                        <a href="#" data-id="{{ $dealer->id }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete"><i class="fa fa-fw fa-trash"></i></a>
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




                    <form class="delete-objeto" action="/admin/dealers/delete" method="POST">
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
