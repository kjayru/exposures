@extends('layouts.frontend.app')

@section('content')
<section class="head p-5 text-white" style="background-image: url(http://exposureteam.mx/wp-content/uploads/2014/08/rock-bgrnd2-1920x500.jpg); ">
   <div class="container">
       <div class="row">
            <h1 >{{ $post->title}}</h1>
       </div>
    <div>
</section>
<section class="container pt-5 pb-5 contenido">
    <div class="row">
        <div class="col-md-8">
            {!! $post->content !!}


        </div>
        <div class="col-md-4">
            <img src="/storage/{{ $post->foto}}" class="img-fluid">
            <ul class="metadata">
                <li class="socialink">
                    <a href="{{ $post->facebook}}" target="_blank">

                        <i class="fab fa-facebook-square"></i>
                     </a>
                     <a href="{{ $post->instagram}}" target="_blank">


                        <i class="fab fa-instagram"></i>
                    </a>
                </li>

                <li>
                    <a href="http://exposureteam.mx/?people-category=equipo" class="tag" rel="tag">Sport climbing</a>,
                    <a href="http://exposureteam.mx/?people-category=rock" class="tag" rel="tag">Bouldering</a>,
                    <a href="http://exposureteam.mx/?people-category=senderista" class="tag" rel="tag">Trad climbing</a>
                </li>

            </ul>
        </div>
    </div>
</section>
@endsection
