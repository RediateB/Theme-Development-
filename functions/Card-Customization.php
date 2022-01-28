<?php

// Homepage Administrators  Customization 
function eduthemealulu_admin_customize_register($wp_customize){
    $wp_customize->add_panel('admin_setting', array(
        'priority' => 11,
        'title' => __('Administrators', 'eduthemealulu'),
        'description'      => __( 'Administrators information customization', 'eduthemealulu' ),
    ));

    // Admin 1 Title Edit
    $wp_customize->add_section("Admin-name-1-section", array(
        'title' => __("Admin 1 Name", "eduthemealulu"),
        'priority' => 1,
        'panel' => 'admin_setting'
    ));

            
    $wp_customize->add_setting("Admin-name-1-settings", array(
        'default' => __("Head of Office", "eduthemealulu"),
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'admin_1_customization_name', array(
        'label' => __('Change Admin', 'eduthemealulu'),
        'section' => 'Admin-name-1-section', 
        'settings' => 'Admin-name-1-settings'
    )));


            // Admin 1 Title Edit
            $wp_customize->add_section("Admin-description-1-section", array(
                'title' => __("Admin 1 Description", "eduthemealulu"),
                'priority' => 2,
                'panel' => 'admin_setting'
            ));

                    
            $wp_customize->add_setting("Admin-description-1-settings", array(
                'default' => __("This is a wider card with supporting text below as a natural l
                                ead-in to additional content. This content is a little bit longer.", "eduthemealulu"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'admin_1_customization_desc', array(
                'label' => __('Change Admin', 'eduthemealulu'),
                'section' => 'Admin-description-1-section', 
                'settings' => 'Admin-description-1-settings'
            )));



                        // Admin 1 Image edit
                        $wp_customize->add_section('Admin-image-1-section', array(
                            'title' => __("Admin 1 Image", 'eduthemealulu'),
                            'priority' => 3,
                            'panel' => 'admin_setting'
                        ));

                        $wp_customize->add_setting("Admin-image-1-settings", array(
                            'default' => get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg',
                            'transport' => 'postMessage',
                            'sanitize_callback' => $sanitize_callback,
                        ));
                        
                        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'admin_1_customization_img', array(
                            'label' => __('Change Admin', 'eduthemealulu'),
                            'section' => 'Admin-image-1-section',
                            'settings' => 'Admin-image-1-settings',
                            'height'=>100, // cropper Height
                            'width'=>100, // Cropper Width
                            'flex_width'=>true, //Flexible Width
                            'flex_height'=>true,
                        )));




    // Admin 2 Title Edit
    $wp_customize->add_section("Admin-name-2-section", array(
        'title' => __("Admin 2 Name", "eduthemealulu"),
        'priority' => 4,
        'panel' => 'admin_setting'
    ));

            
    $wp_customize->add_setting("Admin-name-2-settings", array(
        'default' => __("Deputy Head of Office", "eduthemealulu"),
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'admin_2_customization_name', array(
        'label' => __('Change Service', 'eduthemealulu'),
        'section' => 'Admin-name-2-section', 
        'settings' => 'Admin-name-2-settings'
    )));


            // Admin 2 Title Edit
            $wp_customize->add_section("Admin-description-2-section", array(
                'title' => __("Admin 2 Description", "eduthemealulu"),
                'priority' => 5,
                'panel' => 'admin_setting'
            ));

                    
            $wp_customize->add_setting("Admin-description-2-settings", array(
                'default' => __("This card has supporting text below as a natural lead-in to additional content.", "eduthemealulu"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'admin_2_customization_desc', array(
                'label' => __('Change Admin', 'eduthemealulu'),
                'section' => 'Admin-description-2-section', 
                'settings' => 'Admin-description-2-settings'
            )));



                        // Admin 2 Image edit
                        $wp_customize->add_section('Admin-image-2-section', array(
                            'title' => __("Admin 2 Image", 'eduthemealulu'),
                            'priority' => 6,
                            'panel' => 'admin_setting'
                        ));

                        $wp_customize->add_setting("Admin-image-2-settings", array(
                            'default' => get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg',
                            'transport' => 'postMessage',
                            'sanitize_callback' => $sanitize_callback,
                        ));
                        
                        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'admin_2_customization_img', array(
                            'label' => __('Change Admin', 'eduthemealulu'),
                            'section' => 'Admin-image-2-section',
                            'settings' => 'Admin-image-2-settings',
                            'height'=>100, // cropper Height
                            'width'=>100, // Cropper Width
                            'flex_width'=>true, //Flexible Width
                            'flex_height'=>true,
                        )));


    
    // Admin 3 Title Edit
    $wp_customize->add_section("Admin-name-3-section", array(
        'title' => __("Admin 3 Name", "eduthemealulu"),
        'priority' => 7,
        'panel' => 'admin_setting'
    ));

            
    $wp_customize->add_setting("Admin-name-3-settings", array(
        'default' => __("HR Department Head", "eduthemealulu"),
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'admin_3_customization_name', array(
        'label' => __('Change Admin', 'eduthemealulu'),
        'section' => 'Admin-name-3-section', 
        'settings' => 'Admin-name-3-settings'
    )));


            // Admin 3 Title Edit
            $wp_customize->add_section("Admin-description-3-section", array(
                'title' => __("Admin 3 Description", "eduthemealulu"),
                'priority' => 8,
                'panel' => 'admin_setting'
            ));

                    
            $wp_customize->add_setting("Admin-description-3-settings", array(
                'default' => __("This is a wider card with supporting text below as a natural lead-in to additional content. 
                                This card has even longer content than the first to show that equal height action.", "eduthemealulu"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'admin_3_customization_desc', array(
                'label' => __('Change Admin', 'eduthemealulu'),
                'section' => 'Admin-description-3-section', 
                'settings' => 'Admin-description-3-settings'
            )));


                        // Admin 3 Image edit
                        $wp_customize->add_section('Admin-image-3-section', array(
                            'title' => __("Admin 3 Image", 'eduthemealulu'),
                            'priority' => 9,
                            'panel' => 'admin_setting'
                        ));

                        $wp_customize->add_setting("Admin-image-3-settings", array(
                            'default' => get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg',
                            'transport' => 'postMessage',
                            'sanitize_callback' => $sanitize_callback,
                        ));
                        
                        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'admin_3_customization_img', array(
                            'label' => __('Change Admin', 'eduthemealulu'),
                            'section' => 'Admin-image-3-section',
                            'settings' => 'Admin-image-3-settings',
                            'height'=>100, // cropper Height
                            'width'=>100, // Cropper Width
                            'flex_width'=>true, //Flexible Width
                            'flex_height'=>true,
                        )));
    
    
}

add_action('customize_register', 'eduthemealulu_admin_customize_register');
?>