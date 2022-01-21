<?php
    // function load_style_css(){
    //     wp_register_style('style-ThemeDevelopment', get_template_directory_uri(  ).'/assets/css/style-ThemeDevelopment.css', array(), rand(111,9999), 'all');
    //     wp_enqueue_style('style-ThemeDevelopment');
    // }


    // add_action('wp_enqueue_scripts', 'load_style_css');

    // function load_blog_page_css(){
    //     wp_register_style('blog-style-ThemeDev', get_template_directory_uri(  ).'/assets/css/blog-page-style.css', array(), false, 'all');
    //     wp_register_style('style-ThemeDevelopment', get_template_directory_uri(  ).'/assets/css/style-ThemeDevelopment.css', array(), false, 'all');
    //     wp_enqueue_style('blog-style-ThemeDev');
    //     wp_enqueue_style('style-ThemeDevelopment');
    // }
    
    // add_action('wp_enqueue_scripts', 'load_blog_page_css');


    function new_excerpt_more( $more ) {
        // return '<br/> <span>Continue Reading</span> . . . . .';
        return ' <br/> <a href="<?php the_permalink()?>" class="read-more-link"> Read more… </a>';
        
    }
    add_filter('excerpt_more', 'new_excerpt_more');
?>