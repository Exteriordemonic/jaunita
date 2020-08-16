@php
    $hero = $data['hero'];
@endphp

@if($hero)
<section class="hero">
    <ul class="hero__wrapper" data-hero>
        @foreach ($hero as $item)
        @php
            $iamge = $item['img']['ID'];
            $content = $item['content'];

            $title = $content['title'];
            $subtitle = $content['subtitle']; 
            $link = $content['link'];
        @endphp
        <li class="hero__item" data-hero-item>
            {!! image($iamge, 'full', 'hero__image') !!}
            <div class="container">
                <article class="hero__content">
                    <h2 class="hero__title">
                        {{ $title }}
                    </h2>
                    <p class="hero__subtitle">
                        {{ $subtitle }}
                    </p>
                    @if ($link)
                        <a href="{{ $link['link'] }}" class="button" target="{{ $link['target'] }}">
                            {{ $link['title'] }}
                        </a>
                    @endif
                </article>
            </div>
        </li>
        @endforeach
    </ul>
</section>
@endif