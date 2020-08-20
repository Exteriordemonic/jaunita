<?php 
$args = array(
    'public' => true,
    'label'  => __( 'Services', 'jaunita' ),
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
);
register_post_type( 'services', $args );