<?php

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "title-tag" );

    if(get_page_by_title("Contact") == null)
    {
        $post = array(
            "post_title" => "Contact",
            "post_status" => "publish",
            "post_type" => "page",
            "menu_order" => "-100",
            "page_template" => "./homepage/template-parts/contact-content.php"
        );
    
        wp_insert_post($post);
    
      
    }
    

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
    require_once(get_template_directory( ).'/functions/About-page-Customization.php');
    require_once(get_template_directory( ).'/functions/Typography-Customization.php');



    // menu support
    register_nav_menus();


    // add nav
    function themetest_add_menu(){
        register_nav_menus(
            array(
              'top-menu' => __( 'Top Menu', "eduthemealulu" ),
              'footer-menu' => __( 'Footer Menu', "eduthemealulu" )
            )
          );
    }

    // add an action hook
    add_action( 'init', 'themetest_add_menu' );


    // boootstrap navbar config
    function eduthemealulu_load_bootstrap_navwalker(){
        require_once get_template_directory().'/utils/class-wp-bootstrap-navwalker.php';
    }

    add_action('after_setup_theme', 'eduthemealulu_load_bootstrap_navwalker');




?>