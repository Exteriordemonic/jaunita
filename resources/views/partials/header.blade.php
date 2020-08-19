<header class="header" data-header>
    <div class="header__wrapper container">
        @include('elements.logo')
        <nav class="header__nav" data-nav>
            @include('elements.menu')
            @include('elements.menu-settings')
        </nav>
        @include('elements.hamburger', ['class'=> 'header__hamburger'])
    </div>
</header>