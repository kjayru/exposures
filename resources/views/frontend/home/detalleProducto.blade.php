@extends('layouts.frontend.app')

@section('content')

<section class="paginas">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                     <img src="/storage/{{@$producto->marca[0]->brand->file}}" class="img-fluid logoprod">
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="col-md-8">





                    <div id="slideproducto">
                            <div>
                                <img src="/storage/{{ $producto->imagen}}" class="img-fluid">
                            </div>
                        @if($contador>0)
                            @foreach($galeria as $gal)
                                <div>
                                    <img src="/storage/{{ $gal->imagen}}" class="img-fluid">
                                </div>
                            @endforeach
                        @endif

                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 pb-5 pt-5">
                    <div class="titleprod">
                        <b>{{ $producto->name }}</b>
                        <span class="float-right">${{ $producto->price}}</span>
                    </div>

                    <div class="prodbody">
                        {!! iconv('UTF-8', 'ISO-8859-1//IGNORE',$producto->description) !!}




                    </div>

                </div>
                <div class="col-md-8 p-0 pt-5">
                    <div class="content-box row">
                        <div class="col-md-10">
                            <a href="/preguntas-frecuentes" class="btn btn-primario btn-frecuentes">Preguntas frecuentes</a>

                            <a href="/distribuidores/marca/{{ @$producto->brand->id}}" class="btn  btn-primario btn-comprar">Dónde comprar</a>
                            @if($producto->outlet>0)

                             <a href="#" data-id="{{ @$producto->id }}" class="btn btn-primario  btn-add-producto"> !Comprelo ahora¡ </a>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-face" data-image="{{ env('APP_URL')}}/storage/{{ $producto->imagen}}"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
