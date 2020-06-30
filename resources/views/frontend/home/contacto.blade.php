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
            <h3 class="ptitulo">Contactos</h3>

           {!! $pagina->blocks[0]->contenido !!}

            <div class="row">
                <div class="col-md-12 formulario">
                    <h3>ESCRÍBENOS</h3>

                     <div class="row">
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


                </div>
            </div>
        </div>
    </div>
</section>


@endsection
