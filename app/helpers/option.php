<?php 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Page Settings');

    function option($key)
    {
        return get_field($key, 'options');
    }
}

