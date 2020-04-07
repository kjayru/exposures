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


   <section class="container-fluid dealer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h2>Distribuidores</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <form id="frm-dealer" id="frm-dealer">
                                @csrf
                                <div class="form-group">
                                    <label for="estado">Filtra por estado</label>
                                    <select name="estado" id="estadodealer" class="form-control">
                                        <option value="">Elige</option>
                                        @foreach($estados as $estado)
                                        <option value="{{ $estado->id }}" @if(@$dealer->state_id == $estado->id) selected @endif>{{ $estado->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

            <div class="row justify-content-center">
                <div class="col-md-9">
                        {{ $dealers->links() }}
                </div>
            </div>

            @foreach($dealers as $dealer)
                <div class="row">
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="marco">
                                {!! html_entity_decode($dealer->maps)  !!}
                                </div>

                            </div>
                            <div class="col-md-9 ">
                                <div class="titulo">
                                    <h3>{{ $dealer->name }}</h3>
                                    <span>{{ $dealer->subtitle }}</span>
                                    <p>

                                    {!! $dealer->description !!}
                                    </p>
                                </div>

                                <div class="row abody">
                                    <div class="col-md-4 address ito">
                                    <span>Dirección:</span>
                                    <p> {{ $dealer->address }}</p>
                                    </div>
                                    <div class="col-md-4 phone ito">
                                        <span>Teléfonos:</span>
                                        <p>{{ $dealer->phone }}</p>
                                    </div>
                                    <div class="col-md-4 email ito">
                                        <span>Email:</span>
                                        <p>{!! $dealer->email !!}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach

                <div class="row  justify-content-center">
                    <div class="col-md-9">
                            {{ $dealers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
