@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Categorias</li>
          </ol>
        </section>

        <section class="content">

          <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Categorias</h3>
                  <a href="{{route('category.build')}}" class="btn btn-xs btn-primary pull-right">Crear Categoría</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Nombre</th>
                      <th>Titulo</th>
                      <th>Keywords</th>
                      <th>Descripción</th>
                      <th>Fecha</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>

                      @foreach($categorias as $key=>$categoria)
                      <tr>
                      <th>{{ $key+1}}</th>
                      <td>{{$categoria->name}}</td>
                      <td>{{$categoria->title}}</td>
                      <td>{{$categoria->keywords}}</td>
                      <td>{{$categoria->description}}</td>
                      <td>{{$categoria->updated_at}}</td>
                      <td>
                        <a href="{{ route('category.edit',['id'=>$categoria->id]) }}" class="btn btn-xs btn-primary">Editar</a>
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



@endsection
