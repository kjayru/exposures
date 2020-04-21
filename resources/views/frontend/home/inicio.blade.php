@extends('layouts.frontend.app')

@section('content')

<section class="slider-home">
        <div class="slider-wrapper theme-default">
                <div id="sliderHome" class="nivoSlider">
                    @foreach($slide->slideitems as $item)
                        <img src="/storage/{{$item->imagen}}"  />

                    @endforeach
                </div>

        </div>
</section>



{!! $pagina->blocks[0]->contenido !!}


{!! $pagina->blocks[1]->contenido !!}

{!! $pagina->blocks[2]->contenido !!}



<!--<section id="testimonio" class=" blanco pt-5 pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h3 class="regular">TESTIMONIOS</h3>

                           <p>Que mejor que escuchar recomendaciones de boca de los expertos, en esta seccion podran encontrar reseñas y consejos del equipo que ya esta siendo sometido a las mas duras pruebas de campo a manos de nuestro equipo de atletas.</p>
                            <div class="row">
                            @foreach($testimonios as $k => $testimonio)
                             <!--item-->
                                <div class="testimonio col-md-6">
                                    <div class="mcuadro">
                                        <div class="testimonio-header">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="testImg">
                                                        <img src="/storage/{{$testimonio->foto }}" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="datos">
                                                        <span class="titulo">{{ $testimonio->categoria}}</span>
                                                        <span class="nombre">{{ $testimonio->nombres }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonio-body">
                                                <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-10">
                                                        {{ $testimonio->testimonio }}
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
</section>-->

{!! $pagina->blocks[3]->contenido !!}
<!-- /wp:html -->

@endsection
