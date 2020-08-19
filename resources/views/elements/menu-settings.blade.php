@php
    $appointment = option('appointment');
    $phone = option('tel');
@endphp

<ul class="menu menu--settings">
    <li class="menu-item menu-item--rounded menu-item--icon">
        <button class="menu__button">
            @svg('map')
        </button>
        <div class="menu__toggle">
            @include('elements.small-map')
        </div>
    </li>
    <li class="menu-item menu-item--rounded menu-item--icon">
        <button class="menu__button">
            @svg('clock')
        </button>
        <div class="menu__toggle">
            @include('elements.small-hours')
        </div>
    </li>
    <li class="menu-item menu-item--rounded menu-item--icon">
        <a href="tel:{{ $phone }}">
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