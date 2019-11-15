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

<section class="paginas">
        <div class="container-fluid  seccioncategorias">
            <div class="row justify-content-center">
                <div class="col-md-8 pb-5 pt-5">

                @foreach($categorias as $cat)
                    <a href="/productos/{{ $cat->slug }}" class="btn btn-default btn-categoria">{{ $cat->name }}</a>

                @endforeach

                </div>
            </div>
        </div>
        <div class="seccionwhite producto pt-5 pb-5">
            <div class="row justify-content-center">
                 <div class="col-md-8">
                    @if($categoria)
                     <h2>{{ $categoria->name }}</h2>
                    @else
                    <h2>Productos </h2>
                    @endif
                     <div class="row justify-content-center">
                            <div class="col-md-9">
                                    {{ $productos->links() }}
                            </div>
                        </div>
                     <div class="row">


                         <!--item-->
                         @foreach($productos as $prod)

                         <div class="col-md-6 col-12 cartprod">
                            <div class="row">
                                <div class="contenedor">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="/storage/{{ $prod->imagen}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="titulo">
                                            <h3> {{ iconv('UTF-8', 'ISO-8859-1//IGNORE',$prod->name) }}</h3>
                                                <span> {{ iconv('UTF-8', 'ISO-8859-1//IGNORE',$prod->subtheme) }}</span>
                                            </div>
                                            <div class="body">
                                            {{ iconv('UTF-8', 'ISO-8859-1//IGNORE',$prod->excerpt) }}

                                            </div>
                                            <div class="footer">
                                                <a href="/productos/{{ $prod->category->slug}}/{{$prod->slug}}" class="btn btn-primary btn-irproducto">Ver detalle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>

                         @endforeach


                     </div>
                     <div class="row justify-content-center">
                            <div class="col-md-9">
                                    {{ $productos->links() }}
                            </div>
                        </div>
                 </div>
            </div>
        </div>
    </section>


@endsection
