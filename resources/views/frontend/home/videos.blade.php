@extends('layouts.frontend.app')

@section('content')
<section class="slider-home">
        <div class="slider-wrapper theme-default">
                <div id="sliderEmpresa" class="nivoSlider">
                        @foreach($slide->slideitems as $item)
                        <img src="/storage/{{$item->imagen}}"  />

                    @endforeach
                </div>
        </div>
</section>
<!-- videos-->


<section class="container-fluid paginas">
        <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="row destacado">
                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">

                        <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/{{ $destacado->link }}" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-12 resumen">
                    <div class="contexto">
                        <div class="tituloembed">{{ $destacado->name }}</div>
                            {{ $destacado->description }}
                    </div>
                </div>
            </div>
        </div>

        </div>


        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="row">
                    <!-- loop-->
                    @foreach($videos as $video)
                         <div class="col-md-6">
                            <div class="cvideo embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->link }}" allowfullscreen></iframe>
                            </div>
                            <div class="infotext">
                                {{ $video->name }}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>
    </section>

@endsection
