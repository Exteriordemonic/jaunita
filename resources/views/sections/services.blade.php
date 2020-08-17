@php
    $title = option('services_title');
    $text = option('services_text');
    $color = $data['bg_color'];
    $services = option('services');
@endphp

<section class="section section--{{$color}} services">
    <div class="container">
        <article class="services__content">
            <h2 class="services__title"> 
                {{ $title }}
            </h2>
            <p class="services__text">
                {{ $text }}
            </p>
        </article>
        @if ($services)    
            <ul class="services__list">
                @foreach ($services as $item)
                @php
                    $title = $item['content']['title'];
                    $text = $item['content']['text'];
                    $img = $item['icon']['ID'];
                @endphp
                <li class="services__item">
                    <article class="services__single">
                        <figure class="services__image-wrapper">
                            {!! image($img, 'full', 'services__image') !!}
                        </figure>
                        <h3 class="services__subtitle">
                            {{ $title }}
                        </h3>
                        <p class="services__text">
                            {{ $text }}
                        </p>
                    </article>
                </li>
                @endforeach
            </ul>
        @endif
    </div>
</section>