@php
    $appointment = option('appointment');
@endphp

<ul class="menu menu--settings">
    <li class="menu-item menu-item--rounded menu-item--icon">
        <a href="#">
            @svg('map')
        </a>
    </li>
    <li class="menu-item menu-item--rounded menu-item--icon">
        <a href="#">
            @svg('clock')
        </a>
    </li>
    <li class="menu-item menu-item--rounded menu-item--icon">
        <a href="#">
            @svg('phone')
        </a>
    </li>
    @if ($appointment)
    <li class="menu-item menu-item--rounded">
        <a href="{{ $appointment['url'] }}">
            {{ $appointment['title'] }}
        </a>
    </li>
    @endif
</ul>