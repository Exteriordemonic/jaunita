<?php 

function image($id, $size, $class)
{
    return wp_get_attachment_image($id, $size, false, ['class' => $class]);
}