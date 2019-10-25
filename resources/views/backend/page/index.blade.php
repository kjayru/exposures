@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Paginas
            <small>Gestión de contenido</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Paginas</li>
          </ol>
        </section>


        <section class="content">



          <div class="row">

            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Paginas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                 <div class="box-header with-border">
                    <a href="#" class="btn btn-primary">Crear</a>
                  </div>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Titulo</th>
                      <th>Slug</th>

                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($paginas as $k => $page)
                    <tr>
                      <td>{{$k+1}}</td>

                      <td>{{$page->title}}</td>
                      <td> {{$page->slug}}</td>
                      <td>
                        <a href="/admin/pages/{{$page->id}}/edit" class="btn btn-xs btn-primary">Editar</a>
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
