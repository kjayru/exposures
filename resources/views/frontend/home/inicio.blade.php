@extends('layouts.frontend.app')

@section('content')
<div class="vistas" style="display:none;">
base {{ env('APP_URL').'/storage/' }}
root {{ storage_path('app/public/')}}
</div>
<section class="slider-home">
        <div class="slider-wrapper theme-default">
                <div id="sliderHome" class="nivoSlider">
                    @foreach($slide->slideitems as $item)
                        <img src="/storage/{{$item->imagen}}"  />

                    @endforeach
                </div>

        </div>
</section>



{!! $pagina->blocks[0]->contenido !!}


{!! $pagina->blocks[1]->contenido !!}

{!! $pagina->blocks[2]->contenido !!}

{!! $pagina->blocks[4]->contenido !!}

{!! $pagina->blocks[3]->contenido !!}
<!-- /wp:html -->

@endsection
