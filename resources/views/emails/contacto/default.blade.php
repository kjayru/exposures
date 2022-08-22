@component('mail::message')


<h2>Datos de contactos</h2>

   <b>Nombre:</b>  {{$data['nombre']}}<br>
   <b>Email:</b>  {{$data['email']}}<br>
   <b>Asunto:</b>  {{$data['asunto']}}<br>
   <b>Mensaje:</b>  {{$data['mensaje']}}<br>


@endcomponent
