@extends('layouts.backend.app')
@section('content')


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ordenes

          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Ordenes</li>
          </ol>
        </section>


        <section class="content">



          <div class="row">

            <section class="content">


              <div class="row">

                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Ordenes</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th></th>
                          <th>Producto</th>
                         <!-- <th>Envio</th>-->
                          <th>N Orden</th>
                          <th>Usuario</th>
                          <th>Fecha</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($ordenes as $key=>$order)
                          <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ \App\Order::getNameProducts($order->cart) }} </td>
                            <!--<td>{{ $order->shipment }}</td>-->
                            <td>{{ $order->order_send_id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->updated_at }}</td>
                            <td> <a href="{{ route('order.edit',['id'=>$order->id ]) }}" class="btn btn-primary btn-xs">Detalle</a> </td>
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
