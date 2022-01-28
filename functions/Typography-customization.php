<?php

// Text typography Customization
function eduthemealulu_typography_customize_register($wp_customize){

    $wp_customize->add_panel('font_typography_setting', array(
        'priority' => 12,
        'title' => __('Typography', 'eduthemealulu'),
        'description'      => __( 'Customization typography for different texts', 'eduthemealulu' ),
    ));


    // Site Title Edit
    $wp_customize->add_section("H1-typo-section", array(
        'title' => __("Site Title", "eduthemealulu"),
        'priority' => 1,
        'panel' => 'font_typography_setting'
    ));

            
    $wp_customize->add_setting("H1-typo-settings", array(
        'default' => "Righteous, Cursive",
        'transport' => 'refresh',
        'sanitize_callback' => $sanitize_callback,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'H1_typo_customization', array(
        'label' => __('Change typography', 'eduthemealulu'),
        'section' => 'H1-typo-section', 
        'settings' => 'H1-typo-settings'
    )));



            // Site Description Edit
            $wp_customize->add_section("P-typo-section", array(
                'title' => __("Site Description", "eduthemealulu"),
                'priority' => 2,
                'panel' => 'font_typography_setting'
            ));

                    
            $wp_customize->add_setting("P-typo-settings", array(
                'default' => ("Arial, Helvetica"),
                'transport' => 'refresh',
                'sanitize_callback' => $sanitize_callback,
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'P_typo_customization', array(
                'label' => __('Change typography', 'eduthemealulu'),
                'section' => 'P-typo-section', 
                'settings' => 'P-typo-settings',
                'type' => 'select',
                'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            )));
}

add_action('customize_register', 'eduthemealulu_typography_customize_register');

function eduthemealulu_typography_customize_css(){
    ?>
    <style>
        .cur{
            font-family: <?php echo esc_html(get_theme_mod('H1-typo-settings'))?>;
        }
        .site_desc{
            font-family: <?php echo esc_html(get_theme_mod('P-typo-settings'))?> !important;
        }
    </style>

    <?php
}

add_action('wp_head', 'eduthemealulu_typography_customize_css');
?>