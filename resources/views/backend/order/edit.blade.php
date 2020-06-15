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
            <li class="active">Dashboard</li>
          </ol>
        </section>


        <section class="content">



            <div class="row">
                <div class="box-head">

                </div>
                <div class="box-body">
                    <section class="invoice">
                            <!-- title row -->
                            <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                <i class="fa fa-globe"></i> Exposure
                                <small class="pull-right">Fecha: {{ strftime("%d %B %Y", date (strtotime($orden->created_at)) ) }}</small>
                                </h2>
                            </div>
                            <!-- /.col -->
                            </div>

                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                            <div class="col-xs-12 table-responsive">

                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Datos Cliente</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <dt>Nombre:</dt><dl>{{ $orden->user->name}}</dl>
                                                <dt>Email:</dt><dl>{{ $orden->user->email}}</dl>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Dirección de Envio</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <dt>Nombre:</dt><dl>{{ $orden->billing->name }} {{ $orden->billing->lastname }}</dl>
                                                <dt>Dirección:</dt><dl>{{ $orden->billing->address1 }}</dl>
                                                <dt>Estado :</dt><dl></dl>
                                                <dt>Ciudad :</dt><dl>{{ $orden->billing->city->name }}</dl>



                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($productos->items as $prod)
                                    <tr>

                                        <td>{{ $prod['item']->name}}</td>
                                        <td>{{ $prod['qty']}}</td>
                                        <td>$ {{ $prod['item']->price}}</td>
                                        <td>${{ $prod['price']}}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>





                            </div>


                            <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-xs-6">
                                <p class="lead">Metodo de pago:</p>

                                <img src="/backend/img/credit/paypal2.png" alt="Paypal">

                                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">

                                    Pago realizado. Su pago en línea ha sido procesado con éxito. Gracias por su orden
                                </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-6">
                                <p class="lead">Pago realizado  {{ strftime("%d %B %Y %X", date (strtotime($orden->created_at)) ) }}</p>

                                <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>${{$productos->totalPrice}}</td>
                                    </tr>
                                    <tr>
                                    <!--<th>Impuesto (8%)</th>
                                    <td>$10.34</td>
                                    </tr>
                                    <tr>
                                    <th>Envio:</th>
                                    <td>${{ $orden->shipment}}</td>
                                    </tr>-->
                                    <tr>
                                    <th>Total:</th>
                                    <td>${{$productos->totalPrice}}</td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            <!-- /.col -->
                            </div>
                            <!-- /.row -->
                    </section>
                </div>

                <div class="box-footer">
                        <a href="{{ $previous }}" class="btn btn-danger pull-left">Regresar</a>
                        <!--<a href="" class="btn btn-info pull-right">Ver factura</a>-->
                </div>
            </div>


        </section>

      </div>



@endsection
