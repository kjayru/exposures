@extends('layouts.frontend.app')

@section('content')

<section class="paginas">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                     <img src="/{{@$producto->marca[0]->brand->file}}" class="img-fluid logoprod">
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="col-md-8">





                    <div id="slideproducto">
                            <div>
                                <img src="/storage/{{ $producto->imagen}}" class="img-fluid">
                            </div>
                        @if($contador>0)
                            @foreach($galeria as $gal)
                                <div>
                                    <img src="/storage/{{ $gal->imagen}}" class="img-fluid">
                                </div>
                            @endforeach
                        @endif

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




                    </div>

                </div>
                <div class="col-md-8 p-0 pt-5">
                    <div class="content-box">
                        <a href="/preguntas-frecuentes" class="btn btn btn-primario btn-frecuentes">Preguntas frecuentes</a>

                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
