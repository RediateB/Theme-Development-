<?php

// Homepage Administrators  Customization 
function EduTheme_about_page_customize_register($wp_customize){
    $wp_customize->add_panel('about_setting', array(
        'priority' => 15,
        'title' => __('About', 'EduTheme'),
        'description'      => __( 'About Page details', 'EduTheme' ),
    ));

    // Admin 1 Title Edit
    $wp_customize->add_section("about-title-section", array(
        'title' => __("About Title", "EduTheme"),
        'priority' => 1,
        'panel' => 'about_setting'
    ));

            
    $wp_customize->add_setting("about-title-settings", array(
        'default' => __("Edu online learning system"),
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_page_customization_name', array(
        'label' => __('Change Admin', 'EduTheme'),
        'section' => 'about-title-section', 
        'settings' => 'about-title-settings'
    )));


            // Admin 1 Title Edit
            $wp_customize->add_section("about-description-section", array(
                'title' => __("About Description", "EduTheme"),
                'priority' => 2,
                'panel' => 'about_setting'
            ));

                    
            $wp_customize->add_setting("about-description-settings", array(
                'default' => __("Edu is an oline learning wordpress theme.Lorem ipsum dolor sit amet 
                                consectetur adipisicing elit. Velit, nam pariatur vero minus reprehenderit 
                                non minima modi voluptates harum, totam doloremque nobis impedit reiciendis? 
                                Molestiae accusantium modi cupiditate facilis dolorem! Lorem ipsum dolor sit 
                                amet consectetur adipisicing elit. Maxime porro vero odio nostrum molestias 
                                illu m quis, voluptate ratione? Ullam fugit voluptatibus nesciunt, consequuntur
                                in explicabo nulla autem harum optio molestiae! Lorem ipsum dolor sit amet 
                                consectetur adipisicing elit. Incidunt labore quod eos iusto repellat facilis s 
                                equi mollitia saepe et voluptatibus sapiente hic, ad tempora in suscipit. 
                                Dignissimos dolore quam aspernatu r! Lorem, ipsum dolor sit amet consectetur 
                                adipisicing elit. Ipsa tenetur, maxime aut praesentium ea tempora culpa eius 
                                accusamus porro accusantium nulla eligendi rerum quos beatae! Illum, reiciendis 
                                sit. Offici is, minus!"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_page_customization_desc', array(
                'label' => __('Change Admin', 'EduTheme'),
                'section' => 'about-description-section', 
                'settings' => 'about-description-settings'
            )));



                        // Admin 1 Image edit
                        $wp_customize->add_section('about-image-section', array(
                            'title' => __("About Image", 'EduTheme'),
                            'priority' => 3,
                            'panel' => 'about_setting'
                        ));

                        $wp_customize->add_setting("about-image-settings", array(
                            'default' => get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg',
                            'transport' => 'postMessage',
                            'sanitize_callback' => $sanitize_callback,
                        ));
                        
                        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'about_page_customization_img', array(
                            'label' => __('Change Admin', 'EduTheme'),
                            'section' => 'about-image-section',
                            'settings' => 'about-image-settings',
                            'height'=>100, // cropper Height
                            'width'=>100, // Cropper Width
                            'flex_width'=>true, //Flexible Width
                            'flex_height'=>true,
                        )));
          

    
    
}

add_action('customize_register', 'EduTheme_about_page_customize_register');
?>