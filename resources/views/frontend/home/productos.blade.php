@extends('layouts.frontend.app')

@section('content')
<section class="slider-home">

        <div class="slider-wrapper theme-default">
                <div id="sliderEmpresa" class="nivoSlider">
                    @foreach($slide->slideitems as $k =>$item)
                        <img src="/storage/{{$item->imagen}}"  data-key="{{ $k+1}}" />

                    @endforeach

                </div>

        </div>
</section>

<section class="paginas container">

        <div class="seccionwhite producto pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @if($categoria)
                      <h2>{{ $categoria->name }}</h2>
                    @else
                      <h2>Productos </h2>
                    @endif
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                    {{ $productos->links() }}
                            </div>
                        </div>

                    <div class="row">
                         <!--item-->
                         @foreach($productos as $prod)

                         <div class="col-md-6 col-12 cartprod">
                            <div class="row">
                                <div class="contenedor">
                                    <div class="row">
                                        <div class="col-md-5 col-12">
                                            <img src="/storage/{{ $prod->imagen}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-7 col-12">
                                            <div class="titulo">
                                            <h3> {{ $prod->name }}</h3>
                                                <span> {{ $prod->subtheme }}</span>
                                            </div>
                                            <div class="body d-none d-sm-block">
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
                     <div class="row justify-content-center">
                            <div class="col-md-9">
                                    {{ $productos->links() }}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


@endsection
