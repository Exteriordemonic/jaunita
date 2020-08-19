@php
    $socialIcons = [
        [
            'icon' => 'facebook',
            'url' => option('facebook'),    
        ],
        [
            'icon' => 'twitter',
            'url' => option('twitter'),    
        ],
        [
            'icon' => 'instagram',
            'url' => option('instagram'),    
        ],
    ];

    $socialIcons = array_filter($socialIcons, function ($item) {
        return $item['url'];
    });

@endphp

@if ($socialIcons)
    <ul class="social-icons">
        @foreach ($socialIcons as $item)
        <li class="social-icons__item">
            <a href="{{ $item['url'] }}">
                @svg($item['icon'], 'social-icons__icon')
            </a>
        </li>
        @endforeach
    </ul>
@endif