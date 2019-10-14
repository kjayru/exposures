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
                      <h3 class="box-title">Blog posts</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th></th>
                          <th>Titulo</th>
                          <th>Categoria</th>
                          <th>Creado</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                         @foreach($posts as $k => $post) 
                          <th></th>
                          
                          <td>{{$post->title}}</td>
                          <td> {{ $post->categoryblog->name }}</td>
                          <td>{{$post->created_at}}</td>
                          <td><a href="#" class="btn btn-xs btn-primary">Editar</a></td>
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
