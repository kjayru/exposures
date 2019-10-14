@extends('layouts.backend.app')
@section('content')
   
    
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Facturas
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Factura</li>
          </ol>
        </section>
    
     
        <section class="content">
       
          
       
          <div class="row">
         
            <section class="content">
       
          
       
              <div class="row">
             
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Facturas</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>N</th>
                          
                          <th>Nombre</th>
                          <th>Telefono</th>
                          <th>Metodo de pago</th>
                          <th>Cantidad</th>
                          <th>Recibo</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($facturas as $key =>$fact)
                          <tr>

                              <th>{{$key +1 }}</th>
                              
                              <td>{{$fact->name}}</td>
                              <td>{{$fact->phone}}</td>
                              <td>{{$fact->method}}</td>
                              <td>{{$fact->amount}}</td>
                              <td>{{$fact->recibo_url}}</td>
                              <td>
                                <a href="#" class="btn btn-xs btn-primary">Orden</a>
                                <a href="#" class="btn btn-xs btn-primary">Detalle</a>
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
        
    
        </section>
      
      </div>


      
@endsection
