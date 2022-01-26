<?php

<<<<<<< HEAD
    

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
    

=======
    // Support Thumbnails
    add_theme_support( 'post-thumbnails' );

    // change excerpt more outout
    function new_excerpt_more( $more ) {
        return ' . . . .';
        
    }
    add_filter('excerpt_more', 'new_excerpt_more');
>>>>>>> e3164aca0bce37561c423d2e9849c2512fd78901

?>