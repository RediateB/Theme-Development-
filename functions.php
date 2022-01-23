<?php

    // Support Thumbnails
    add_theme_support( 'post-thumbnails' );

    // change excerpt more outout
    function new_excerpt_more( $more ) {
        return ' . . . .';
        
    }
    add_filter('excerpt_more', 'new_excerpt_more');

?>