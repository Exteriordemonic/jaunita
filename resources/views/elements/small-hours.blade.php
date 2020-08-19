@php
     $title = option('address_title2');
     $hours = option('hours');
     $img = option('hours_image')['ID'];
@endphp

<div class="small-hours">
    <div class="small-hours__header">
        <h2 class="small-hours__title">{{ $title }}</h2>
        <p class="small-hours__text">
            @svg('pin', 'small-hours__icon')
            {!! $hours !!}
        </p>
    </div>
    @if ($img)
    <figure class="small-hours__image-wrapper">
        {!! image($img, 'full', 'small-hours__image') !!}
    </figure>
    @endif
</div>