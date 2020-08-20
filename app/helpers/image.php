<?php 

function image($id, $size, $class)
{
    return wp_get_attachment_image($id, $size, false, ['class' => $class]);
}

update_option( 'medium_crop', 1 );
update_option( 'large_crop', 1 );