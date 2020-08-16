@php
    $infobar = option('infobar_text');
@endphp

@if($infobar)
<section class="infobar">
    <div class="container">
        <p class="infobar__text">
            {{ $infobar }}
        </p>
    </div>
</section>
@endif