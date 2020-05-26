

@if(@$item['subitem'] == [])

    <li >
        <p>{{ $item['name'] }}</p>
        <a href="{{ route('marca.edit',['id'=>$item['id']]) }}" class="btn btn-xs btn-primary">Editar</a>
        <a href="#" data-id="{{ $item['id'] }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>

    </li>
@else
<li  >

 <p> {{ $item['name'] }}</p>
    <a href="{{ route('marca.edit',['id'=>$item['id']]) }}" class="btn btn-xs btn-primary">Editar</a>
    <a href="#" data-id="{{ $item['id'] }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>


    <ul class=" lista2">

        @foreach($item['subitem'] as $j => $submenu)

            @if (@$submenu['subitem'] == [])
                <li >

                   <p>{{$submenu['name']}}</p>
                   <a href="{{ route('marca.edit',['id'=>$submenu['id']]) }}" class="btn btn-xs btn-primary">Editar</a>
                   <a href="#" data-id="{{ $submenu['id'] }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>


                </li>
            @else

                @include('layouts.backend.include.marca-item', [ 'item' => $submenu ])
            @endif


        @endforeach
    </ul>
</li>

@endif





