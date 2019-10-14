@extends('layouts.backend.app')
@section('content')
   
    
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blog
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
                <div class="box-header">
                  <h3 class="box-title">Categorias blog</h3>
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
                      <th><a href="#" class="btn btn-xs btn-primary">Editar</a></th>
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


      
@endsection
