@php
    $logo = option('logo')['ID'];
@endphp

@if ($logo)
<a class="logo {{ $class }}" href="{{ home_url("/") }}">
    {!! image($logo, 'full', 'logo__image') !!}
</a>
@endif