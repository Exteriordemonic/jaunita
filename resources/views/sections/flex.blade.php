@php
    $options = $data['options'];
    $img = $options['image']['ID'];
    $color = $options['bg_color'];
    $direction = $options['direction'];
    $offset_top = $options['offset_top'] ? $options['offset_top'] : 0;
    $offset_bottom = $options['offset_bottom'] ? $options['offset_bottom'] : 0;
    $pattern = $options['pattern'] ? 'pattern' : '';

    $content = $data['content'];
    $title = $content['title'];
    $subtitle = $content['subtitle'];
    $text = $content['text'];
    $link = $content['link'];
@endphp

<section class="flex section--{{ $color }} flex--{{ $direction }} flex--{{ $pattern }} section">
    <div class="flex__wrapper container">
        <figure class="flex__image-wrapper" style="margin-top: {{ -$offset_top }}%; margin-bottom: {{ -$offset_bottom }}%;">
            {!! image($img, 'full', 'flex__image') !!}
        </figure>
        <article class="flex__content">
            @if ($title)
            <h2 class="flex__title">
                {{ $title }}
            </h2>
            @endif

            @if ($subtitle)
            <h3 class="flex__subtitle">
                {{ $subtitle }}
            </h3>
            @endif

            @if ($text)
            <p class="flex__text">
                {!! $text !!}
            </p>
            @endif

            @if ($link)
            <a href="{{ $link['link'] }}" class="button button--light" target="{{ $link['target'] }}">
                {{ $link['title'] }}
            </a>
            @endif
        </article>
    </div>
</section>