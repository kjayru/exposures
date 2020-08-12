@extends('layouts.frontend.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<section class="container outlet">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row align-items-center imagenproducto">
                <div class="col">
                     <img src="/storage/{{ $producto->imagen}}"  class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row justify-content-center titulodetalle">
                <div class="col-md-12 text-left">
                    <h2 class="pb-2 pt-2 pricetitle">{{ $producto->title }}</h2>
                </div>

            </div>

            <div class="row">

                <div class="col-md-4 text-left">
                    <h2 class="pricetext">${{ $producto->price }}</h2>
                </div>

                <div class="col-md-12">
                    <h3 class="pb-2 pt-2 titulo-descripcion">Descripción</h3>
                    {!! $producto->description !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 infoutlet">
                    <strong>Favor de solicitar existencias antes de confirmar la compra por medio de chat.</strong>
                </div>
            </div>

            <div class="row botones">
                <div class="col-md-12">
                    <div id="paypal-button-container"></div>



                    <a href="#" data-id="{{ $producto->id }}" class="btn btn-primario btn-paypal btn-add-producto"> Añadir al carrito </a>
                    <a href="/preguntas-frecuentes" class="btn btn-primario btn-frecuentes">Preguntas frecuentes</a>
                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-face" data-image="{{ env('APP_URL')}}/storage/{{ $producto->imagen}}"><i class="fab fa-facebook-f"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="modaladdprod" tabindex="-1" role="dialog" aria-labelledby="modaladdprodLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modaladdprodLabel">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
              <span class="added-product">Tu producto se agrego al carrito</span>
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
            <a href="/carrito"  class="btn btn-primary pull-left">Ir al carrito</a>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Seguir comprando</button>
        </div>
      </div>
    </div>
  </div>
@endsection
