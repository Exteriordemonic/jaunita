@php
    $title = option('testimonials_title');
    $testimonials = option('testimonials');
@endphp

@if ($testimonials)
<article class="testimonials">
    <h2 class="testimonials__title">
        {{ $title }}
    </h2>
    <ul class="testimonials__list" data-testimonials>
        @foreach ($testimonials as $item)
        @php
            $title = $item['content']['title'];        
            $text = $item['content']['text'];        
            $name = $item['content']['name'];        
        @endphp
            <li class="testimonials__item" data-testimonials-item>
                <blockquote class="testimonials__wrapper">
                    <span class="testimonials__quote">"</span>
                    <h3 class="testimonials__subtitle">
                       {{ $title }} 
                    </h3>
                    <p class="testimonials__text">
                        {{ $text }}
                    </p>
                    <span class="testimonials__name">
                        - {{ $name }}
                    </span>
                </blockquote>
            </li>
        @endforeach
        <li class="testimonials__item testimonials__item--bg">
            @svg('big-heart', 'testimonials__bg')
        </li>
    </ul>
</article>
@endif