@extends('layouts.frontend.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<section class="container outlet">

    <div class="row justify-content-center">
        <div class="col-md-4 ">
            <div class="row align-items-center imagenproducto">
                <div class="col">
                     <img src="/storage/{{ $producto->imagen}}"  class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row justify-content-center titulodetalle">
                <div class="col-md-8">
                    <h2 class="p-2 pricetitle">{{ $producto->title }}</h2>
                </div>
                <div class="col-md-4 text-right">
                    <h2 class="p-2 pricetext">${{ $producto->price }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    {!! iconv('UTF-8', 'ISO-8859-1//IGNORE',$producto->description)  !!}
                </div>
            </div>

            <div class="row botones">
                <div class="col-md-12">
                    <div id="paypal-button-container"></div>

                   <!-- <form method="POST" action="/addproduct">
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto->id }}">
                    <button type="submit" class="btn btn-primario btn-paypal">Añadir al carrito</button>
                    </form>-->

                    <a href="#" data-id="{{ $producto->id }}" class="btn btn-primario btn-paypal btn-add-producto"> Añadir al carrito </a>
                    <a href="#" class="btn btn-primario btn-frecuentes">Preguntas frecuentes</a>
                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-face"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-twitter"><i class="fab fa-twitter"></i></a>
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
            <a href="/carrito" class="btn btn-primary pull-left">Ir al carrito</a>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Seguir comprando</button>
        </div>
      </div>
    </div>
  </div>
@endsection
