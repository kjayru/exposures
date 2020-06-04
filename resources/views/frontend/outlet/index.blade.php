@extends('layouts.frontend.app')

@section('content')

<section class="container-fluid outlet">
    <section class="slider-home">
        <div class="slider-wrapper theme-default">
                <div id="sliderHome" class="nivoSlider">
                    @foreach($slide->slideitems as $item)
                        <img src="/storage/{{$item->imagen}}"  />

                    @endforeach
                </div>

        </div>
</section>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="titulo pt-3 pb-3">Recientemente agregados</h2>
        </div>
    </div>
    <div class="row justify-content-center grayspace">
        <div class="col-md-8 pt-3 pb-3">
            <div class="row">

                <div class="col-md-12">
                    <div class="recientes">

                    @foreach($latest as $pd)


                            <div class="card-item">
                                <a href="/outlet/{" class="product-card">
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
        <div class="col-md-8">

            <div class="row pb-5 pt-5">
                <div class="col-md-3 menusidebar">
                    <ul class="navbar">

                        @foreach($marcas as $cat)
                        <li><a href="/outlet/{{@$cat->slug}}" class="link @if(strpos($_SERVER['REQUEST_URI'], @$cat['slug']) !== false) active  @endif">{{ @$cat['name'] }}</a></li>
                        @endforeach
                    </ul>

                </div>
                <div class="col-md-9">
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
                            <div class="col-md-4 col-6 pb-3">
                                <div class="card">
                                    <div class="card-foot">
                                        <div class="title"></div>

                                    </div>
                                    <a href="/outlet/producto/{{$prod->slug}}">
                                    <div class="card-head">

                                    </div>
                                    <div class="card-body">
                                        <img src="/storage/{{$prod->imagen}}" class="card-img-top">
                                    </div>
                                    <div class="card-foot">
                                        <div class="row cardpad">
                                            <div class="col-md-7">
                                                <div class="titulo">{{ $prod->name }}</div>
                                            </div>
                                            <div class="col-md-5 rcol">
                                                <div class="price">${{ $prod->price }}</div>
                                            </div>
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
@endsection
