@php
    $title = option('offert_title');
    $text = option('offert_text');
    $list = option('offert_list');
    $text2 = option('offert_tex2');
    $image = option('offert_image')['ID'];
@endphp

<article class="offert">
    <h2 class="offert__title">
        {{ $title }}
    </h2>
    <p class="offert__text">
        {{ $text }}
    </p>
    @if ($list)
    <ul class="offert__list">
        @foreach ($list as $item)
        <li class="offert__item">
            @svg('paw-print', 'offert__dot')
            {{ $item['text'] }}
        </li>
        @endforeach
    </ul>
    @endif

    <p class="offert__text offert__text--dashed">
        {{ $text2 }}
    </p>

    <figure class="offert__image-wrapper">
        {!! image($image, 'full', 'offert__image') !!}
    </figure>
</article>