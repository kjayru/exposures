@extends('layouts.frontend.app')

@section('content')

<section class="container-fluid outlet">
    <img src="/images/top_image.jpg" class="img-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="pt-5 pb-5">Recientemente agregados</h2>
        </div>
    </div>
    <div class="row justify-content-center grayspace">
        <div class="col-md-8 pt-5 pb-5">
            <div class="row">


                <div class="card-columns">
                   @foreach($latest as $pd)
                    <div class="card">
                        <blockquote class="blockquote mb-0 card-body">
                            <img src="/storage/{{ $pd->imagen}}"  class="card-img-top">
                        </blockquote>
                    </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row pb-5 pt-5">
                <div class="col-md-3">
                    <ul class="navbar">
                        @foreach($categorias as $cat)
                        <li><a href="/outlet/{{$cat['slug']}}" class="link">{{ $cat['name'] }}</a></li>
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
                    <div class="card-columns products">

                        @foreach($products as $prod)
                        <div class="card">
                             <a href="/outlet/{{ $prod->category->slug}}/{{$prod->slug}}">
                            <div class="card-head">
                                <div class="title">{{ $prod->name }}</div>
                                <div class="price">$ {{ $prod->price }}</div>
                            </div>
                            <div class="card-body">

                               <img src="/storage/{{$prod->imagen}}" class="card-img-top">
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
