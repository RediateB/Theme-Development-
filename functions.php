<?php
    function load_style_css(){
        wp_register_style('style-ThemeDevelopment', get_template_directory_uri(  ).'/assets/css/style-ThemeDevelopment.css', array(), rand(111,9999), 'all');
        wp_enqueue_style('style-ThemeDevelopment');
    }


    add_action('wp_enqueue_scripts', 'load_style_css');

    

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
    


?>