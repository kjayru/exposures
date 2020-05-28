

@if(@$item['subitem'] == [])

    <li >
        <p>{{ $item['name'] }}</p>

    </li>
@else
<li>

 <p>
    <label for=""> <input type="checkbox"  @if(@$catprods>0) @if(in_array(@$item['id'], @$catprods)) checked @endif @endif name="categoria[]" value=" {{$item['id'] }}"> {{$item['name'] }}</label>
</p>

    <ul class="lista2">

        @foreach($item['subitem'] as $j => $submenu)

            @if (@$submenu['subitem'] == [])
                <li >

                   <p>
                    <input type="checkbox"  @if(@$catprods>0) @if(in_array(@$submenu['id'], @$catprods)) checked @endif @endif name="categoria[]" value=" {{$submenu['id'] }}"> {{$submenu['name'] }}</label>
                </p>


                </li>
            @else

                @include('layouts.backend.include.category-input', [ 'item' => $submenu ])
            @endif


        @endforeach
    </ul>
</li>

@endif





