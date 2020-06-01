

@if ($item['submenu'] == [])

    <li> <a class="dropdown-item"  href="/marca/{{ $item['id'] }}/{{ $item['slug'] }}">{{ $item['name'] }} </a></li>
@else
    <li  class="dropdown-submenu">

        <a href="/marca/{{ $item['id']}}/{{$item['slug']}}" class="dropdown-item dropdown-toggle"> {{ $item['name'] }}</a>
        <ul class="dropdown-menu">

            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])

                <li><a href="/marca/{{$submenu['id']}}/{{$submenu['slug']}}" class="dropdown-item">{{$submenu['name']}}</a></li>
                @else
                    @include('layouts.frontend.partials.menumarca-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>

@endif





