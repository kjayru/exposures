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


                  <table id="example2" class="table table-bordered table-hover">
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
                      </thead>
                      <tbody>

                          @foreach($productos as $key=>$product)
                          <tr>
                          <th>{{ $key+1}}</th>
                          <td>{{$product->name}}</td>
                          <td>{{$product->price}}</td>
                          <td width="15%">{{$product->excerpt}}</td>
                          <td>{{$product->title}}</td>
                          <td><img src="/storage/{{$product->imagen}}" width="50" alt="" srcset=""></td>

                          <td>{{$product->updated_at}}</td>
                          <td>
                            <a href="{{ route('product.edit',['id'=> $product->id]) }}" class="btn btn-xs btn-primary">Editar</a>
                            <a href="#" data-id="{{ $product->id }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>
                          </td>
                        </tr>
                      </tbody>
                          @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
              {{ $productos->links() }}

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
