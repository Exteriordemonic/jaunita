<?php

$args = array(
    'public'   => true,
    'label'    => __( 'Projekty', 'textdomain' ),
    'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),
);
register_post_type( 'projekty', $args );

$args = array(
    'label'        => __( 'Kategoria', 'textdomain' ),
    'rewrite'      => array( 'slug' => 'kategoria' ),
    'hierarchical' => true,
);

register_taxonomy( 'katgoria', 'projekty', $args);