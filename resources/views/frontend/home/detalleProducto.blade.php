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

                            @if(@$producto->marca)
                            <a href="/distribuidores/filtro/{{ @$producto->id}}" class="btn  btn-primario btn-comprar">Dónde comprar</a>

                            @else
                           <a href="/distribuidores" class="btn  btn-primario btn-comprar">Dónde comprar</a>
                           @endif
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
    <section>
        <div class="container">
            @if($relacionados != null)
            <div class="row">
                <!--item-->
                @foreach($relacionados as $prod)
                    @if($prod->id!=$producto->id)
                    <div class="col-md-6 col-12 cartprod">
                    <div class="row">
                        <div class="contenedor">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="/storage/{{ $prod->imagen}}" class="img-fluid">
                                </div>
                                <div class="col-md-7">
                                    <div class="titulo">
                                    <h3> {{ $prod->name }}</h3>
                                        <span> {{ $prod->subtheme }}</span>
                                    </div>
                                    <div class="body">
                                    {{  \Illuminate\Support\Str::limit($prod->excerpt, 150) }}

                                    </div>
                                    <div class="footer">

                                        <a href="/producto/{{$prod->id}}/{{$prod->slug}}" class="btn btn-primary btn-irproducto">Ver detalle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    @endif
                @endforeach

            </div>
            @endif
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
