@php
    $title = option('address_title');
    $title2 = option('address_title2');
    $address = option('address');
    $tel = option('tel');
    $hours = option('hours');
@endphp
<address class="address">
    <div class="address__wrapper">
        <div class="address__cel">
            <h2 class="address__title">{{ $title }}</h2>
            <p class="address__text">
                @svg('pin', 'address__icon')
                {{ $address }}
            </p>
            <p class="address__text">
                @svg('phone', 'address__icon')
                <a class="address__link" href="tel:{{ $tel }}">{{ $tel }}</a>
            </p>
        </div>
        <div class="address__cel">
            <h2 class="address__title">{{ $title }}</h2>
            <p class="address__text">
                @svg('clock', 'address__icon')
                {!! $hours !!}
            </p>
        </div>
    </div>
</address>