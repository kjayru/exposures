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
    
     
        <section class="content">
       
          
       
          <div class="row">
         
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Productos</h3>
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
                          <th>Categoria</th>
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
                          <td>{{$product->excerpt}}</td>
                          <td>{{$product->title}}</td>
                          <td><img src="/storage/products/{{$product->imagen}}" width="50" alt="" srcset=""></td>
                          <td>{{$product->category->name}}</td>
                          <td>{{$product->updated_at}}</td>
                          <td>
                            <a href="/admin/product/{{$product->id}}/edit" class="btn btn-xs btn-primary">Editar</a>
                          </td>
                        </tr>
                      </tbody>
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
