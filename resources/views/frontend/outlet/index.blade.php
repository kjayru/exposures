@extends('layouts.frontend.app')

@section('content')

<section class="container-fluid">
    <div class="slider-home">
        <div class="slider-wrapper theme-default">
                <div id="sliderHome" class="nivoSlider">
                    @foreach($slide->slideitems as $item)
                        <img src="/storage/{{$item->imagen}}"  />

                    @endforeach
                </div>

        </div>
    </div>
</section>
<section class="container outlet">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="titulo pt-3 pb-3">Recientemente agregados</h2>
        </div>
    </div>
    <div class="row justify-content-center grayspace">
        <div class="col-md-8 pt-3 pb-3">
            <div class="row">

                <div class="col-md-12">
                    <div id="recientes" class="reciente-slide">

                    @foreach($latest as $pd)


                            <div>
                                <a href="/outlet/producto/{{$pd->slug}}" class="product-card">
                                    <div class="place pproduct-card__image-wrapper">
                                        <img src="/storage/{{ $pd->imagen}}"  class="img-fluid">
                                    </div>
                                    <div class="product-card__overlay">
                                        <span class="btn product-card__overlay-btn  btn--narrow">Ver producto</span>
                                    </div>
                                </a>
                            </div>


                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12 col-12">

            <div class="row pb-5 pt-5">

                <div class="col-md-12">
                    <h3 class="pTitulo pb-5">
                        @if(@$nombre)
                        {{$nombre}}
                        @else
                        Productos
                        @endif
                    </h3>
                    <div class="row products">

                        @if($products)
                            @foreach($products as $prod)
                                <div class="col-md-4 col-12 pb-3">
                                    <div class="card">
                                        <div class="card-head">
                                            <div class="title d-none d-sm-block">
                                                <a href="#" data-id="{{$prod->id}}" class="carprod btn-add-producto">cart</a>
                                            </div>

                                        </div>
                                        <a href="/outlet/producto/{{$prod->slug}}">
                                        <div class="card-head">

                                        </div>
                                        <div class="card-body">
                                            <img src="/storage/{{$prod->imagen}}" class="img-fluid">


                                                <div class="row cardesk ">
                                                    <div class="col-md-7 col-6 d-block d-sm-none">
                                                        <div class="titulo">{{ $prod->name }}</div>
                                                    </div>
                                                    <div class="col-md-5 rcol col-6 d-block d-sm-none">
                                                        <div class="price">${{ $prod->price }}</div>
                                                    </div>
                                                </div>


                                        </div>
                                        <div class="card-foot">
                                            <div class="row cardpad ">
                                                <div class="col-md-7 d-none d-sm-block">
                                                    <div class="titulo">{{ $prod->name }}</div>
                                                </div>
                                                <div class="col-md-5 rcol d-none d-sm-block">
                                                    <div class="price">${{ $prod->price }}</div>
                                                </div>
                                            </div>

                                            <div class="footmovil d-block d-sm-none text-center">
                                                <a href="#"  data-id="{{$prod->id}}" class="btn btn-primary btn-add-producto">Agregar al carrito</a>
                                            </div>

                                        </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

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
