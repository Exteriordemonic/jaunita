@php
    $title = option('services_title');
    $text = option('services_text');
    $color = $data['bg_color'];
    $services = option('services');
@endphp

@query([
  'post_type' => 'services',
  'orderby'   => 'date',
  'order'     => 'ASC'
])

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
        @hasposts
        <ul class="services__list row">
            @posts
            <li class="services__item col-xl-3 col-lg-4 col-md-6 col-xs-12">
                <a href="@permalink" class="services__single">
                    <figure class="services__image-wrapper">
                        @thumbnail('full')
                    </figure>
                    <h3 class="services__subtitle">
                        @title
                    </h3>
                    <p class="services__text">
                        @excerpt
                    </p>
                </a>
            </li>
            @endposts
        </ul>
        @endhasposts
    </div>
</section>