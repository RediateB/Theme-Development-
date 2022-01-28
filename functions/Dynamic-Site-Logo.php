<?php

// Site logo customization

function theme_support_options() {
    $defaults = array(
    'height'      => 40,
    'width'       => 50,
    'flex-height' => false,
    'flex-width'  => false
    );

    add_theme_support( 'custom-logo', $defaults );
   }


   add_action( 'after_setup_theme', 'theme_support_options' );


?>