<?php

    // Support Thumbnails
    add_theme_support( 'post-thumbnails' );

    // change excerpt more outout
    function new_excerpt_more( $more ) {
        return ' . . . .';
        
    }
    add_filter('excerpt_more', 'new_excerpt_more');



    // menu support
    add_theme_support('menus');


    // add nav
    function themetest_add_menu(){
        register_nav_menus(
            array(
              'top-menu' => __( 'Top Menu' ),
              'footer-menu' => __( 'Footer Menu' )
            )
          );
    }

    // add an action hook
    add_action( 'init', 'themetest_add_menu' );


    // boootstrap navbar config
    function themetest_load_bootstrap_navwalker(){
        require_once get_template_directory().'/utils/class-wp-bootstrap-navwalker.php';
    }

    add_action('after_setup_theme', 'themetest_load_bootstrap_navwalker');

?>