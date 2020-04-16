

@if(@$item['subitem'] == [])

    <li class="list-group-item ">
        <p>{{ $item['name'] }}</p>
        <a href="{{ route('category.edit',['id'=>$item['id']]) }}" class="btn btn-xs btn-primary">Editar</a>
        <a href="#" data-id="{{ $item['id'] }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>

    </li>
@else
<li  class="list-group-item first-item" >

 <p> {{ $item['name'] }}</p>
    <a href="{{ route('category.edit',['id'=>$item['id']]) }}" class="btn btn-xs btn-primary">Editar</a>
    <a href="#" data-id="{{ $item['id'] }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>


    <ul class="list-group lista2">

        @foreach($item['subitem'] as $j => $submenu)

            @if (@$submenu['subitem'] == [])
                <li class="list-group-item ">

                   <p>{{$submenu['name']}}</p>
                   <a href="{{ route('category.edit',['id'=>$submenu['id']]) }}" class="btn btn-xs btn-primary">Editar</a>
                   <a href="#" data-id="{{ $submenu['id'] }}" data-toggle="modal" data-target="#delobjeto" class="btn btn-xs btn-danger btn-object-delete">Borrar</a>


                </li>
            @else

                @include('layouts.backend.include.category-item', [ 'item' => $submenu ])
            @endif


        @endforeach
    </ul>
</li>

@endif





