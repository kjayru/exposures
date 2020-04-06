@extends('layouts.frontend.app')

@section('content')

<section class="paginas">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                     <img src="/images/marcas/10-BD-logo-png" class="img-fluid logoprod">
                </div>
            </div>

            <!--<div class="row justify-content-center">
                <div class="col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/">categoria</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $producto->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>-->

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="producto-img">

                    </div>


                    <div id="carouselProducto" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>

                            </ol>

                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                    <img src="/storage/{{ $producto->imagen}}" class="img-fluid">
                              </div>
                              <div class="carousel-item ">
                                    <img src="/storage/{{ $producto->imagen}}" class="img-fluid">
                              </div>

                            </div>


                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
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
                            <!--<p class="describe">
                                Ya sea que estés buscando un arnés para entrenar en el gimnasio, o un arnés que te proporcione
                                comodidad en la roca, el Black Diamond SOLUTION WOMEN'S no tiene rival, su sistema de 3 correas
                                distribuye equitativamente el peso alrededor de tu cintura, quitándote peso de los puntos sensibles
                                y generándote mayor comodidad
                            </p>
                            <h3>CARACTERÍSTICAS</h3>

                            <ul>
                                <li>Diseñado para adaptarse a los contornos de tu cuerpo</li>
                            <li>Cinturón de peso ligero con Fusion Comfort Tecnology</li>
                            <li>Ajuste contorneado para mayor comodidad y amplitud de movimiento</li>
                            <li>Cuatro engranajes moldeados a presión</li>
                            <li>Bucles de bandas elásticas ajustables y liberables</li>
                            <li>Peso: 330gr</li>
                            </ul>
                            <h3>COLORES DISPONIBLES</h3>
                            <ul>
                            <li>Nickel</li>
                            <li>Octane</li>
                            </ul>
                            <h3>TALLAS DISPONIBLES</h3>
                            <p>
                            XS - S - M - L
                            </p>-->


                            <a href="/preguntas-frecuentes" class="btn  btn-producto">Preguntas frecuentes</a>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
