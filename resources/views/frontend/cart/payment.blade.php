@extends('layouts.frontend.app')
@section('content')

<section id="payment" class="pt-5 pb-5 " >
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="bloque1 card card-main-step">
                    <h3 class="card-title-step">
                        <div class="quantity-icon quantity-icon-primary">
                            <i class="fa fa-car" aria-hidden="true"></i>
                        </div>
                        <div class="card-title">Dirección de envío</div>
                    </h3>
                    <div class="card-edit-option" ng-show="checkout.flow.can('step1')">
                        <button class="btn btn-default-outline btn-sm btn-outline-dark btn-modificar-address" >Modificar</button>

                    </div>

                    <div class="adractivo">

                        <div class="col-xs-12" >
                            <div class="col-sm-6 col-xs-12">
                              <div class="card-chosen" ng-show="!checkout.order.selectedStore">
                                <div class="card-chosen-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="card-chosen-body">
                                  <h4 class="card-chosen-heading">Dirección de envío</h4>

                                @if($billingselect)
                                  <div class="address-name">{{ $billingselect->name }} {{ $billingselect->lastname }}</div>
                                    <address >{{ $billingselect->address1 }}<br>
                                        {{ $billingselect->city->name }} - {{ $billingselect->colony }} - {{ $billingselect->zipcode }}<br>
                                        Teléfono: {{ $billingselect->phone }} - {{ $billingselect->other_phone}}
                                    </address>
                                @endif
                                </div>
                              </div>


                            </div>
                        </div>

                    </div>
                    <div class="adrselect" style="display:none;">
                        <div>
                            <div class="address-book-section">
                                <div class="choose-address">Elige una dirección de entrega</div>
                                <address-book type="shipping" creatable="true" selectable="true" editable="true" >

                                        <div class="row">
                                            <div class="col-xs-12">


                                                <div class="row">
                                                    @if($billings)
                                                    @foreach($billings as  $key => $bill)
                                                            @include('layouts.frontend.partials.address')
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                </address-book>
                            </div>


                            <div class="toolbar row">
                                <div class="col-xs-12">
                                  <button class="btn btn-default-outline btn-sm btn-outline-dark btn-add-address" data-tipo="nuevo" modal="address-form-56" style="">
                                    Agregar nueva dirección
                                  </button>
                                </div>
                            </div>

                        </div>


                        <button  class="btn btn-sm col-xs-12 col-md-6 col-md-offset-6 btn-primary" >
                            <span ng-if="shippingOptions.currentTab == 'homeDelivery'">Aceptar</span>
                        </button>

                    </div>
                </div>



                <div class="bloque4 card-main-step card">
                    <h3 class="card-title-step">
                        <div class="quantity-icon quantity-icon-primary">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </div>
                        <div class="card-title">Tus productos</div>
                     </h3>

                     <div class="card-body">
                        @if($productos)
                        <table class="table">
                            @foreach($productos->items as $prod)
                            <tr>
                                <td><img src="/storage/{{ $prod['item']->imagen  }}" class="img-fluid cart-img"></td>
                                <td>{{ $prod['item']->name  }}</td>
                            </tr>
                            @endforeach
                        </table>
                        @endif
                     </div>
                </div>


            </div>
            <div class="col-md-2">

                    <div class="summary-container">

                        <ul class="summary">
                            <li class="summary-pay row">

                        @if($productos)
                            <form action="{{ route('cart.charge') }}" method="post">
                                <input type="hidden" name="amount" value="{{ $productos->totalPrice}}" />
                                {{ csrf_field() }}
                                <button type="submit" name="submit" class="btn btn-lg btn-primary summary-btn-process-pay col-md-12"> Finalizar Compra</button>
                            </form>
                        @endif
                        </li>
                        </ul>
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

@include('layouts.frontend.partials.forms.address')

@endsection
