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
{!! $pagina->blocks[0]->contenido !!}

{!! $pagina->blocks[1]->contenido !!}

{!! $pagina->blocks[2]->contenido !!}

{!! $pagina->blocks[3]->contenido !!}


 <section class="container proximo">




        <div class="col-md-12 contacto">
            <h3>NOS INTERESA TU OPINIÓN... EXPOSURE TE ESCUCHA</h3>


            <form action="/proceso" method="POST">
                @csrf
                <div class="row formulario">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="nombre" placeholder="Nombre:*" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email:*" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="asunto" placeholder="Asunto:*" class="form-control" required>
                        </div>

                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="mensaje" class="form-control" placeholder="Mensaje:*" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>



        </div>

</section>


@endsection
