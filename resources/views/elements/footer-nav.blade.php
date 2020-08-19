@if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav', 'echo' => false]) !!}
@endif
