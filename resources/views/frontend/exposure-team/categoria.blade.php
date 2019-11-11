@extends('layouts.frontend.app')

@section('content')

<div class="slider-team">
    <div class="slide" style="background: url(/images/slide/banner_exposure-team.jpg) center center; background-size:cover;">

    </div>
    <div class="slide" style="background: url(/images/slide/portada_exposure_1.jpg) center center; background-size:cover;">

    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center grayback ml-1 mr-1">
        <div class="col-md-10">
                Somos Exposure
        </div>
    </div>
</div>

<div class="container-fluid lienzo">
    <div class="row justify-content-center">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-head">
                        <ul class="nav">
                            <li class="nav-item">
                                    <a class="nav-link" href="/exposure-team">
                                        <span class="ac-category-filter selected">Todo</span>
                                    </a>
                                </li>
                           @foreach($categorias as $cat)
                            <li class="nav-item">
                                <a class="nav-link" href="/exposure-team/{{$cat->slug}}">
                                    <span class="ac-category-filter ">{{$cat->name}}</span>
                                </a>
                            </li>
                           @endforeach
                        </ul>
                </div>
                <div class="card-body">
                    <div class="row">
                    <!--item-->
                    @foreach($posts as $key => $post)

                    <div class="ac-tile-col  col-lg-3 col-md-3 col-sm-4 col-xs-12 all equipo rock">
                        <a href="/exposure-team/{{$post->categoryblog->slug}}/{{ $post->slug}}">
                             <div class="image">
                                <img class="grid-image" src="/storage/{{$post->foto}}" alt="Downhill Taxco 2016" width="404" height="270">
                            </div>
                            <div class="text">
                                <h3 class="ac-tile-title ac-ellipsis">{{$post->title}}</h3>
                                <p class="excerpt">
                                    {{$post->excerpt}}
                                </p>
                            </div>
                        </a>
                            <div class="ac-tile-footer">
                                <div class="ac-social-links">
                                 <a href="{{$post->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                                 <a href="{{ $post->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                    </div>
                    @endforeach
                        <!--end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
