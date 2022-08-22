@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Productos
            <small>gestione productos</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Productos</li>
          </ol>
        </section>
        @if(session('info'))

            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('info')}}</h4>

            </div>
        @endif

        <section class="content">



          <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Productos</h3>
                  <a href="{{route('product.build')}}" class="btn btn-xs btn-primary pull-right">Crear producto</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">


                  <table id="productos" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Resumen</th>
                          <th>Titulo</th>
                          <th>Imagen</th>

                          <th>Fecha</th>
                          <th></th>
                        </tr>


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


                    <form class="delete-objeto" action="/admin/products/delete" method="POST">
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
            <!-- /.modal-dialog -->
        </div>

@endsection
