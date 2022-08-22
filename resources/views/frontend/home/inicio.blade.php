@extends('layouts.frontend.app')

@section('content')
<div class="vistas" style="display:none;">
base {{ env('APP_URL').'/storage/' }}
root {{ storage_path('app/public/')}}
</div>
<section class="slider-home">
        <div class="slider-wrapper theme-default">
                <div id="sliderHome" class="nivoSlider">
                    @if(!empty($slide->slideitems))
                    @foreach($slide->slideitems as $item)
                        <img src="/storage/{{$item->imagen}}"  />

                    @endforeach
                    @endif
                </div>

        </div>
</section>



{!! $pagina->blocks[0]->contenido !!}


{!! $pagina->blocks[1]->contenido !!}

{!! $pagina->blocks[2]->contenido !!}

{!! $pagina->blocks[4]->contenido !!}

{!! $pagina->blocks[3]->contenido !!}
<!-- /wp:html -->


<!--modal suscripcion-->

<div class="modal__suscripcion">
    <div class="container">
        <div class="row justify-content-center">

            <div class="contenedor__card col-md-6">
                <a href="#" class="btn btn__close">
                    <i class="fas fa-times-circle"></i>
                </a>
                <div class="suscripcion__logo">
                    <img src="/images/logo-suscribir.png" class="suscripcion__logo_img">
                </div>
                <div class="suscripcion__header">
                    <div class="suscripcion__header_title">¡Suscríbete!</div>
                    <div class="suscripcion__header_parrafo">Registrate para recibir nuestras ultimas</div>
                </div>
                <div class="suscripcion__form">
                    <form method="post" id="frm__post">
                        <div class="form-group">
                            <input type="text" id="sus__nombre" name="nombre" class="form-control input__suscribe" placeholder="Nombre" required>
                            <span class="error__nombre"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" id="sus__email" name="email" placeholder="Email" class="form-control input__suscribe" required>
                            <span class="error__email"></span>
                        </div>
                        <div class="form-group">
                            <input type="text"  id="sus__telefono" class="form-control input__suscribe" name="telefono" placeholder="Teléfono" required>
                            <span class="error__telefono"></span>
                        </div>
                        <div class="form-group">
                            <span class="texto__legal">*Campos obligatorios</span>
                            <p class="texto__parrafo">Al ingresar su número de teléfono, acepta recibir mensajes de texto de marketing de nuestra
                                empresa en el número proporcionado, incluidos los mensajes enviados por
                                marcador automático. El consentimiento no es una  condición de compra. Se pueden
                                aplicar tarifas por mensajes y datos.
                            </p>
                        </div>
                        <div class="form-group">
                            <button  class="btn btn__suscripcion">Suscribirme</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
