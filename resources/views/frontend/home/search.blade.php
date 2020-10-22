@extends('layouts.frontend.app')

@section('content')
<section class="slider-home">
        <div class="slider-wrapper theme-default">


        </div>
</section>

<section class="paginas">
    <div class="seccionwhite producto pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h2>Resultados: </h2>
                    <div class="row">
                        @foreach($products as $k => $prod)

                            <div class="col-md-6 col-12 cartprod">
                                <div class="row">
                                    <div class="contenedor">
                                        <div class="row">
                                            <div class="col-md-5 pt-4">
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

                        @endforeach
                    </div>

            </div>
        </div>
    </div>
</section>
@endsection
