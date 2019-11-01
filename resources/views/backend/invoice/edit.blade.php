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

                <div class="box-body">
                        <section class="invoice">
                                <!-- title row -->
                                <div class="row">
                                <div class="col-xs-12">
                                    <h2 class="page-header">
                                    <i class="fa fa-globe"></i> Exposure
                                    <small class="pull-right">Fecha: {{ $factura->created_at }}</small>
                                    </h2>
                                </div>
                                <!-- /.col -->
                                </div>

                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                <div class="col-xs-12 table-responsive">
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
                                        <tr>

                                            <td>Call of Duty</td>
                                            <td>1</td>
                                            <td>$ 54.00</td>
                                            <td>$ 54.50</td>
                                        </tr>
                                        <tr>

                                            <td>Call of Duty</td>
                                            <td>1</td>
                                            <td>$ 54.00</td>
                                            <td>$ 54.50</td>
                                        </tr>
                                        <tr>
                                            <td>Call of Duty</td>
                                            <td>1</td>
                                            <td>$ 54.00</td>
                                            <td>$ 54.50</td>
                                        </tr>

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
                                    <p class="lead">Pago realizado 2/22/2014</p>

                                    <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                        </tr>
                                        <tr>
                                        <th>Impuesto (8%)</th>
                                        <td>$10.34</td>
                                        </tr>
                                        <tr>
                                        <th>Envio:</th>
                                        <td>${{ $factura->shipment}}</td>
                                        </tr>
                                        <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
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
                        <a href="{{ URL::previous() }}" class="btn btn-default">Cancelar</a>
                </div>
          </div>
        </section>
      </div>
@endsection
