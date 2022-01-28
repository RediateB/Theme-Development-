<?php

// Homepage Services Theme Customization 
function service_customize_register($wp_customize){
    $wp_customize->add_panel('service_setting', array(
        'priority' => 10,
        'title' => __('Service', 'eduthemealulu'),
        'description'      => __( 'Theme Modifications like color scheme, 
                                    theme texts and layout preferences 
                                    can be done here', 'eduthemealulu' ),
    ));

    // Service 1 Title Edit
    $wp_customize->add_section("service-title-1-section", array(
        'title' => __("Service 1 Title", "eduthemealulu"),
        'priority' => 1,
        'panel' => 'service_setting'
    ));

            
    $wp_customize->add_setting("service-title-1-settings", array(
        'default' => __("Service 1", "eduthemealulu"),
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'service_customization1', array(
        'label' => __('Change Service', 'eduthemealulu'),
        'section' => 'service-title-1-section', 
        'settings' => 'service-title-1-settings'
    )));


            // Service 1 body Edit
            $wp_customize->add_section("service-body-1-section", array(
                'title' => __("Service 1 Body", "eduthemealulu"),
                'priority' => 1,
                'panel' => 'service_setting'
            ));

                    
            $wp_customize->add_setting("service-body-1-settings", array(
                'default' => __("Service 1 detail description customization", "eduthemealulu"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'service_customization11', array(
                'label' => __('Change Service', 'eduthemealulu'),
                'section' => 'service-body-1-section', 
                'settings' => 'service-body-1-settings'
            )));


    // Service 2 Title Edit
    $wp_customize->add_section("service-title-2-section", array(
        'title' => __("Service 2 Title", "eduthemealulu"),
        'priority' => 2,
        'panel' => 'service_setting'
    ));

    $wp_customize->add_setting("service-title-2-settings", array(
        'default' => __("Service 2", "eduthemealulu"),
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'service_customization2', array(
            'label' => __('Change Service', 'eduthemealulu'),
            'section' => 'service-title-2-section', 
            'settings' => 'service-title-2-settings'
    )));


            // Service 2 Body Edit
            $wp_customize->add_section("service-body-2-section", array(
                'title' => __("Service 2 Body", "eduthemealulu"),
                'priority' => 2,
                'panel' => 'service_setting'
            ));

            $wp_customize->add_setting("service-body-2-settings", array(
                'default' => __("Service 2 detail description customization", "eduthemealulu"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'service_customization22', array(
                    'label' => __('Change Service', 'eduthemealulu'),
                    'section' => 'service-body-2-section', 
                    'settings' => 'service-body-2-settings'
            )));

    // Service 3
    $wp_customize->add_section("service-title-3-section", array(
        'title' => __("Service 3 Title", "eduthemealulu"),
        'priority' => 3,
        'panel' => 'service_setting'
    ));

    $wp_customize->add_setting("service-title-3-settings", array(
        'default' => __("Service 3", "eduthemealulu"),
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'service_customization3', array(
            'label' => __('Change Service', 'eduthemealulu'),
            'section' => 'service-title-3-section', 
            'settings' => 'service-title-3-settings'
    )));


            // Service 3
            $wp_customize->add_section("service-body-3-section", array(
                'title' => __("Service 3 Body", "eduthemealulu"),
                'priority' => 3,
                'panel' => 'service_setting'
            ));

            $wp_customize->add_setting("service-body-3-settings", array(
                'default' => __("Service 3 detail description customization", "eduthemealulu"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'service_customization33', array(
                    'label' => __('Change Service', 'eduthemealulu'),
                    'section' => 'service-body-3-section', 
                    'settings' => 'service-body-3-settings'
            )));
}
add_action('customize_register', 'service_customize_register');

?>