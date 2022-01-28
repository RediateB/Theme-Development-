<?php

// Text typography Customization
function EduTheme_typography_customize_register($wp_customize){

    $wp_customize->add_panel('font_typography_setting', array(
        'priority' => 12,
        'title' => ('Typography', 'EduTheme'),
        'description'      => ( 'Customization typography for different texts', 'EduTheme' ),
    ));


    // Site Title Edit
    $wp_customize->add_section("H1-typo-section", array(
        'title' => ("Site Title", "EduTheme"),
        'priority' => 1,
        'panel' => 'font_typography_setting'
    ));

            
    $wp_customize->add_setting("H1-typo-settings", array(
        'default' => "Righteous, Cursive",
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'H1_typo_customization', array(
        'label' => ('Change typography', 'EduTheme'),
        'section' => 'H1-typo-section', 
        'settings' => 'H1-typo-settings'
    )));



            // Site Description Edit
            $wp_customize->add_section("P-typo-section", array(
                'title' => ("Site Description", "EduTheme"),
                'priority' => 2,
                'panel' => 'font_typography_setting'
            ));

                    
            $wp_customize->add_setting("P-typo-settings", array(
                'default' => ("Arial, Helvetica"),
                'transport' => 'refresh',
            ));

            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'P_typo_customization', array(
                'label' => __('Change typography', 'EduTheme'),
                'section' => 'P-typo-section', 
                'settings' => 'P-typo-settings',
                'type' => 'select',
                'choices' => array("Open Sans"=>"Open Sans","Dancing Script" => "Dancing Script","Spicy Rice" => "Spicy Rice","inherit"=>"inherit"),
            )));
}

add_action('customize_register', 'EduTheme_typography_customize_register');

function EduTheme_typography_customize_css(){
    ?>
    <style>
        .cur{
            font-family: <?php echo get_theme_mod('H1-typo-settings')?>;
        }
        .site_desc{
            font-family: <?php echo get_theme_mod('P-typo-settings')?> !important;
        }
    </style>

    <?php
}

add_action('wp_head', 'EduTheme_typography_customize_css');
?>