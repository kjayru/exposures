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


        <contenido-component></contenido-component>


<section id="testimonio" class="bgMontana blanco pt-5 pb-5" >
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h2>Testimonios</h2>
                            Que mejor que escuchar recomendaciones de boca de los expertos, en esta seccion podran encontrar reseñas y consejos del equipo que ya esta siendo sometido a las mas duras pruebas de campo a manos de nuestro equipo de atletas.
                            <div class="row">
                            @foreach($testimonios as $k => $testimonio)
                             <!--item-->
                                <div class="testimonio col-md-6">
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

                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
</section>


 <section id="marcas" class="pt-5 pb-5 " >
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="regular">MARCAS PARTICIPANTES</h3>

                    <div class="row">
                        <div class="col-md-2">
                            <img src="http://exposure.mx/images/logo-black-diamond-200.png" class="img-fluid">
                        </div>
                        <div class="col-md-2">
                            <img src="http://exposure.mx/images/logo-black-diamond-200.png"  class="img-fluid">
                        </div>
                        <div class="col-md-2">
                            <img src="http://exposure.mx/images/logo-black-diamond-200.png"  class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="regular">Marca que apoyamos</h3>
                            <div class="col-md-4">
                                <img src="http://exposure.mx/images/naturalia.png" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h3 class="regular">Sigamos conectados</h3>
                            <p>Si quieren pedir consejo directamente a alguno de nuestros atletas siganos
                             en fb "Exposure Climbing Team" o al fb "Exposure Industria y Montaña" donde
                             con gusto responderemos sus dudas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
