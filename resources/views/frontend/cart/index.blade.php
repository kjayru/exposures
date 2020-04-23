@extends('layouts.frontend.app')
@section('content')

<section id="carrito" class="pt-5 pb-5 " >
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="regular">Carrito de compras</h3>

                    <table class="table">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Producto</th>
                                <th>QTY</th>

                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           @if($productos)

                            @foreach($productos->items as $prod)

                            <tr>
                                <td><img src="/storage/{{ $prod['item']->imagen  }}" class="img-fluid cart-img"></td>
                                <td>{{ $prod['item']->name  }}</td>
                                <td>1</td>

                                <td>{{ $prod['item']->price}}</td>
                                <td><a href="#" data-id="{{ $prod['item']->id }}" class="btn btn-danger btn-sm btn-remove-prod">Eliminar</button></td>
                            </tr>
                            @endforeach
                           @else
                                    <tr><td>NO EXISTEN PRODUCTOS EN TU CARRITO</td></tr>
                                    <tr><td colspan="4" class="text-center">
                                        <a href="/outlet" class="btn btn-lg btn-primary summary-btn-process-pay col-md-12">
                                          Compra ahora
                                          </a>
                                    </td></tr>
                           @endif
                        </tbody>


                    </table>
            </div>
            <div class="col-md-2">
                <div class="summary-container">
                    <h3 class="title-summary">Resumen de tu pedido</h3>
                    @if($productos)
                    <ul class="summary">

                            <li> <p>Subtotal</p>
                                <span class="price-main-sm pull-xs-right subtotal-price">$ {{ $productos->totalPrice}}</span>
                            </li>
                            <li> <p>Envío</p>
                                <span class="price-base-md pull-xs-right shipping-price ng-hide">0.00</span>
                            </li>

                            <section class="summary-total-pay-section">
                                <li class="summary-total">
                                    <h3>
                                    Total
                                         <span class="price-main-md pull-xs-right" >$ {{ $productos->totalPrice}}</span>
                                    </h3>
                                </li>
                                <li class="summary-pay row">
                                        <a href="/checkout/payment" class="btn btn-lg btn-primary summary-btn-process-pay col-md-12" >
                                      Procesar Compra
                                    </a>
                                </li>
                              </section>
                    </ul>


                    @else

                    <ul class="summary">

                        <li> <p>Subtotal</p>
                            <span class="price-main-sm pull-xs-right subtotal-price">0.00</span>
                        </li>
                        <li> <p>Envío</p>
                            <span class="price-base-md pull-xs-right shipping-price ng-hide"></span>
                        </li>

                        <section class="summary-total-pay-section">
                            <li class="summary-total">
                                <h3>
                                Total
                                     <span class="price-main-md pull-xs-right" >0.00</span>
                                </h3>
                            </li>

                          </section>
                </ul>

                    @endif

                </div>


            </div>
        </div>
    </div>
</section>
@endsection
