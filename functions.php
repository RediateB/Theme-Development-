<?php
    function load_style_css(){
        wp_register_style('style-ThemeDevelopment', get_template_directory_uri(  ).'/assets/css/style-ThemeDevelopment.css', array(), false, 'all');
        wp_enqueue_style('style-ThemeDevelopment');
    }


    add_action('wp_enqueue_scripts', 'load_style_css');


?>