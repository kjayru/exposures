@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Categorias Blog
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Blog</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Categorias blog</h3>
                    <a href="{{ route('catblog.created')}}" class="btn btn-primary pull-right">Crear</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Nombre</th>
                      <th>Slug</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($categorias as $k =>$cat)
                    <tr>
                      <th>{{$k +1}}</th>
                      <td>{{ $cat->name}}</td>

                      <td>{{$cat->slug}}</td>
                      <th>
                          <a href="{{ route('catblog.edit',['id'=>$cat->id]) }}" class="btn btn-xs btn-primary">Editar</a>
                          <a href="#" data-id="{{ $cat->id }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>
                        </th>
                    </tr>
                    @endforeach
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
                    <form class="delete-objeto" action="/admin/category-blog/delete" method="POST">
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
