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


<section class="container-fluid paginas">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Contacto</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="circular">
                    <img src="http://exposure.mx/images/contactoMapa.png" class="img-fluid">
                    </div>
                    <div class="cbody">
                        <b>Dirección</b>
                        <p>Oscar Wilde 224-b Col. Sendero San Jeronimo,
                         Monterrey, Nuevo Leon, Mexico
                         </p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="circular">
                    <img src="http://exposure.mx/images/contactoTelefono.png" class="img-fluid">
                    </div>
                    <div class="cbody">
                        <b>Teléfonos</b>
                        <p>(01 81) 81233278</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="circular">
                    <img src="http://exposure.mx/images/contactoMail.png" class="img-fluid">
                    </div>
                    <div class="cbody">
                        <b>Email</b>
                        <p>Ricardo Vara Briones<br>
                           ricardo.vara1@exposure.mx</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="circular">
                    <img src="http://exposure.mx/images/contactoInfo.png" class="img-fluid">
                    </div>
                    <div class="cbody">
                        <b>Soporte online</b>
                        <p>Facebook: Exposure<br>
                           industria y montaña</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3>NOS INTERESAN TUS COMENTARIOS!</h3>

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
