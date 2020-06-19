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


   <section class="container dealer">
        <div class="row">
            <div class="col-md-12 col-12">
                    <h2>Distribuidores</h2>
                        <form id="frm-dealer" id="frm-dealer">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="estado">Filtra por estado</label>
                                        <select name="estado" id="estadodealer" class="form-control">
                                            <option value="">Elige</option>
                                            @foreach($estados as $estado)
                                            <option value="{{ $estado->id }}" @if(@$dealer->state_id == $estado->id) selected @endif>{{ $estado->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="estado">Filtra por marca</label>
                                        <select name="estado" id="marcadealer" class="form-control">
                                            <option value="">Elige</option>
                                            @foreach($marcas as $marca)
                                            <option value="{{ $marca->id }}"  >{{ $marca->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
             </div>



            @foreach($dealers as $dealer)

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

                                <div>
                                    @foreach($dealer->brand as $marca)

                                    <img src="/storage/{{  $marca->file }}" alt="" width="100">
                                    @endforeach
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

                <hr>
            @endforeach


                    <div class="col-md-9">
                            {{ $dealers->links() }}
                    </div>

            </div>
        </div>
    </section>

@endsection
