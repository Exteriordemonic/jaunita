@include('sections.info')

@php
    $copyrights = option('copyrights');
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
                @include('elements.footer-stamp')
            </span>
        </p>
        @include('elements.footer-nav')
        @include('elements.social-icons')
    </div>
</footer>