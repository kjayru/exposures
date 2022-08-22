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
<section class="container-fluid paginas contactos">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="ptitulo">Contacto</h3>

           {!! $pagina->blocks[0]->contenido !!}

            <div class="row">
                <div class="col-md-12 formulario">
                    <h3>Gracias por contactarnos</h3>




                </div>
            </div>
        </div>
    </div>
</section>
@endsection
