@extends('layouts.frontend.app')

@section('content')

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
                    <a href="#" class="btn btn-primario btn-paypal">Añadir al carrito</a>
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
@endsection
