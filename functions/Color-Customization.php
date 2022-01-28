<?php

// Text Color Customization
function color_customize_register($wp_customize){

    $wp_customize->add_panel('font_color_setting', array(
        'priority' => 12,
        'title' => __('Colors', 'Edux'),
        'description'      => __( 'Customization color for different texts', 'Edux' ),
    ));


    // Site Title Edit
    $wp_customize->add_section("H1-section", array(
        'title' => __("Site Title", "Edux"),
        'priority' => 1,
        'panel' => 'font_color_setting'
    ));

            
    $wp_customize->add_setting("H1-settings", array(
        'default' => '#000000',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'H1_customization', array(
        'label' => __('Change Color', 'Edux'),
        'section' => 'H1-section', 
        'settings' => 'H1-settings'
    )));



            // Site Description Edit
            $wp_customize->add_section("P-section", array(
                'title' => __("Site Description", "Edux"),
                'priority' => 2,
                'panel' => 'font_color_setting'
            ));

                    
            $wp_customize->add_setting("P-settings", array(
                'default' => __('#000000'),
                'transport' => 'refresh',
            ));

            $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'P_customization', array(
                'label' => __('Change Color', 'Edux'),
                'section' => 'P-section', 
                'settings' => 'P-settings'
            )));
}

add_action('customize_register', 'color_customize_register');

function theme_customize_css(){
    ?>
    <style>
        .cur{
            color: red;
        }
        .site_desc{
            background: <?php echo get_theme_mod('P-settings')?> !important;
        }
    </style>

    <?php
}

add_action('wp_head', 'theme_customize_css');
?>