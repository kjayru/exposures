
@if ($item['submenu'] == [])

    <li> <a class="dropdown-item"  href="/categoria/{{ $item['slug'] }}">{{ $item['name'] }} </a></li>
@else
    <li  class="dropdown-submenu">

        <a href="/categoria/{{ $item['slug']}}" class="dropdown-item dropdown-toggle"> {{ $item['name'] }}</a>
        <ul class="dropdown-menu">

            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                <li><a href="/categoria/{{$submenu['slug']}}" class="dropdown-item">{{$submenu['name']}}</a></li>
                @else
                    @include('layouts.frontend.partials.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>

@endif





