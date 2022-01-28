<?php

    // Support Thumbnails
    add_theme_support( 'post-thumbnails' );

    // change excerpt more outout
    function new_excerpt_more( $more ) {
        return ' . . . .';
        
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    

    require_once(get_template_directory( ).'/functions/Card-Customization.php');
    require_once(get_template_directory( ).'/functions/Services-Customization.php');
    require_once(get_template_directory( ).'/functions/Dynamic-Site-Logo.php');
    require_once(get_template_directory( ).'/functions/Color-Customization.php');
    require_once(get_template_directory( ).'/functions/Footer-Widgets.php');
?>