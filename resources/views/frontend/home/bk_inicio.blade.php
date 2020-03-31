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
<section id="quienes">
    <div class="montana"></div>
    <div class="container">
        <div class="col-xl-4 col-lg-5 col-md-6  col-sm-6 col-12 bloqueazul">
            <div class="logohome">
                <img src="/images/logoside.png" alt="exposure" class="img-fluid">
            </div>
            <h1>Quienes Somos</h1>
            <p>Exposure Industria y Montaña es una empresa dedicada a la difusión y comercialización de equipo de montañismo y escalada en México.</p>
            <p>  Nos dedicamos a lo que mas disfrutamos que es escalar y promocionar los deportes de Outdoor, por lo mismo tenemos un compromiso con el deporte y la gente que lo practica, ofrecemos los mejores productos para tu aventura y te proveemos con la solución mas adecuada a tu necesidad.</p>
        </div>

    </div>
</section>

<section class="container diamond">
    <div class="row">
           <div class="col-md-4">
               <div class="icanva">
                    <div class="logoblack">
                        <img src="/images/blackdiamond.jpg" alt="black diamond" class="img-fluid">
                    </div>
                    <div class="textoinf">
                       Best <br>of the Best
                    </div>
                    <p>
                        No importa si van hacer un viaje de
                        escalada o lo tuyo es la montaña o el
                        trekking  a continuación encontraras las
                        mejores recomendaciones en
                        equipamiento para la actividad que tu
                        realizas.
                    </p>
                </div>
           </div>
           <div class="col-md-8 referencia">
               <div class="row">

                <div class="col-md-12 img-left">
                    <div class="row">
                        <div class="col-md-6 cimage">
                            <img src="/images/tresCols1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 order-1">
                            <div class="title">Lifeguard</div>
                            <div class="body">
                                <p>
                                    Madrock trae para nosotros el dispositivo de seguridad con frenado asistido, compacto, ligero y duradero. Construido con aluminio de grado aeronáutico forjado en caliente y acero inoxidable para una mayor durabilidad. El “Lifeguard” se puede utilizar con técnicas de belay clásico con cuerdas individuales que van desde 8,9 mm a 11 mm para una perfecta escalada de altura.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 img-left">
                    <div class="row">
                        <div class="col-md-6 order-1">
                            <img src="/images/tresCols2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <div class="title">Vermont classic</div>
                            <div class="body">
                                <p>
                                    VERMONT CLASSIC
                                    Las gafas tradicionales de alpinismo atemporales que reafirman la historia de Julbo en la montaña. Para celebrar su 125° aniversario y dar a todos los seguidores las gafas de sol que esperan, la marca ha rediseñado la legendaria Vermont, conservando el tradicional modelo con micas redondas y protecciones laterales. No te quedes sin las gafas que grandes alpinistas han alabado por años.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 img-left">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/images/tresCols3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 order-1">
                            <div class="title">X-talon 225</div>
                            <div class="body">
                                <p>
                                    Corre rápido sobre terrenos extremos con comodidad y confianza con este zapato para trail que INOV-8 trae para nosotros. El X-TALON 225 ofrece una mayor durabilidad y mejor agarre, convirtiendo a este zapato en el paquete perfecto de ligereza y agilidad. Ideal para descensos en grandes pendientes, y carreras de montaña. Un zapato que todo buen corredor debe tener.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



               </div>
           </div>
    </div>

</section>

<section id="marcas" class="pt-5 pb-5 " >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 content">
                <h3 class="regular">MARCAS PARTICIPANTES</h3>

                <div class="row justify-content-center">
                    <div class="col-md-12 listamarca text-center">
                        <img src="http://exposure.mx/images/logo-black-diamond-200.png" class="img-fluid">

                        <img src="http://exposure.mx/images/so_ill_logo.png"  class="img-fluid">

                        <img src="http://exposure.mx/images/Mad-Rock-Logo-.png"  class="img-fluid">

                        <img src="http://exposure.mx/images/2016-11-27_sterling_logo-01.png"  class="img-fluid">

                        <img src="http://exposure.mx/images/2016-11-27_julbo_logo-01.png" class="img-fluid">

                        <img src="http://exposure.mx/images/gsi_logo.png" class="img-fluid">

                        <img src="http://exposure.mx/images/INOV8.png" class="img-fluid">

                        <img src="http://exposure.mx/SMARTWOOL-LOGO.png" class="img-fluid">
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>




<section id="testimonio" class=" blanco pt-5 pb-5" >
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
</section>

<section id="socials">
    <div class="container-fluid p-0 m-0">

        <div class="row">
            <div class="col-md-6 backblue">
                <div class="row justify-content-end">
                    <div class="boxfoot1 col-md-7">
                        <h2>SIGAMOS CONECTADOS</h2>
                        <p>Si quieren pedir consejo directamente a alguno de nuestros atletas siganos en fb "Exposure Climbing Team"
                        o al fb "Exposure Industria y Montaña" donde con gusto responderemos sus dudas</p>
                        <a href="#" class="btn-social"><img src="/images/faceicon.jpg" class="img-fluid"></a>
                        <a href="#" class="btn-social"><img src="/images/instaicon.jpg" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 m-0 boxleftfoot">
                <div class="backgray">
                    <div class="row justify-content-start">
                        <div class="boxfoot2 col-md-7">
                            <div class="row">
                                <div class="col">
                                    <h4>Marcas que apoyamos</h4>
                                </div>
                                <div class="col">

                                    <img src="/images/apoyo.jpg"  class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
