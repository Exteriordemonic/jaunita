@include('sections.info')

@php
    $copyrights = option('copyrights');
    $brand = option('footer_brand')['ID'];
@endphp

<footer class="footer">
    <div class="footer__contact">
        @include('elements.map')
        @include('elements.address')
    </div>
    <div class="footer__wrapper container">
        <p class="footer__copyrights">
            © {{ date('Y') }} {{ $copyrights }}
            <span class="footer__brand">
                @svg('tech', 'footer__icon') // {!! image($brand, 'full', 'footer__brand-image') !!}
            </span>
        </p>
        @include('elements.footer-nav')
        @include('elements.social-icons')
    </div>
</footer>