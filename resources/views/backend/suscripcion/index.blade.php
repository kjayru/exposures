@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Suscripciones
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Suscripciones</li>
          </ol>
        </section>
        @if(session('info'))

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> {{ session('info')}}</h4>

          </div>
         @endif
        <section class="content">

          <div class="row">

            <div class="col-xs-12">
              <div class="box">
                
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                      <th>Fecha</th>
                      
                    </tr>
                    </thead>
                    <tbody>

                      @foreach($suscripciones as $key=>$suscribe)
                      <tr>
                      <th>{{ $key+1}}</th>
                      <td>{{@$suscribe->nombre}}</td>
                      <td>{{@$suscribe->email}}</td>
                      <td>{{@$suscribe->telefono}}</td>
                      <td>
                        {{@$suscribe->created_at}}
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
