@extends('layouts.frontend.app')

@section('content')

<section class="container-fluid outlet">
    <img src="/images/top_image.jpg" class="img-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="pt-5 pb-5">{{ $producto->title}}</h2>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="/storage/{{ $producto->imagen}}"  class="img-fluid">

        </div>
    </div>
</section>
@endsection
