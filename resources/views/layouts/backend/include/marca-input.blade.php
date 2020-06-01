

@if(@$item['subitem'] == [])

    <li>
        <p>{{ $item['name'] }}</p>

    </li>
@else
<li>

 <p>
    <label> <input type="checkbox"  @if(@$mpro>0) @if(in_array(@$item['id'], @$mpro)) checked @endif @endif name="marcas[]" value="{{$item['id'] }}"> {{$item['name'] }}</label>
     </p>

    <ul class=" lista2">

        @foreach($item['subitem'] as $j => $submenu)

            @if (@$submenu['subitem'] == [])
                <li>
                   <p>
                       <label><input type="checkbox"  @if(@$mpro>0) @if(in_array(@$submenu['id'], @$mpro)) checked @endif @endif name="marcas[]" value="{{$submenu['id'] }}"> {{$submenu['name'] }}</label>
                    </p>
                </li>
            @else

                @include('layouts.backend.include.marca-item', [ 'item' => $submenu ])
            @endif


        @endforeach
    </ul>
</li>

@endif





