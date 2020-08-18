@php
    $options = $data['options'];
    $img = $options['image']['ID'];
    $direction = $options['direction'];
   
    $content = $data['content'];
    $title = $content['title'];
    $subtitle = $content['subtitle'];
    $text = $content['text'];
    $link = $content['link'];
@endphp

<section class="cta cta--{{ $direction }}">
    <figure class="cta__image-wrapper">
        {!! image($img, 'full', 'cta__image') !!}
    </figure>
    <article class="cta__content">
        @if ($title)
            <h2 class="cta__title">
                {{ $title }}
            </h2>
            @endif

            @if ($subtitle)
            <h3 class="cta__subtitle">
                {{ $subtitle }}
            </h3>
            @endif

            @if ($text)
            <p class="cta__text">
                {!! $text !!}
            </p>
            @endif

            @if ($link)
            <a href="{{ $link['link'] }}" class="button button--light" target="{{ $link['target'] }}">
                {{ $link['title'] }}
            </a>
            @endif
            @svg('big-heart', 'cta__bg')
    </article>
</section>