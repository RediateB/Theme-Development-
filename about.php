<?php
/**
 * Template Name: About Page
 * 
 */

get_header();
?>
<div class="container" style="margin-top: 40px;">
        <h1 style="text-align: center; margin-bottom: 40px; font-weight: 700; background-color: #63ffc2; width: 100%; height: 100px; padding-top: 30px; margin-top: 150px; margin-bottom: 100px;" >About Us</h1>
    </div>
    <div style="margin-bottom: 40px;"><hr> </div>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-4">
            <?php
                function get_about_image_url() {
                    if ( get_theme_mod( 'about-image-settings' ) > 0 ) {
                        return wp_get_attachment_url( get_theme_mod( 'about-image-settings' ) );
                    } else {
                        return get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg';
                    }
                }
              ?>
            </div>
            <div class="col-md-5"style=" marign-right: 5px;">
                <h1>
                <?php 
                    echo get_theme_mod('about-title-settings');
                ?>
                </h1>
                <p> 
                <?php 
                    echo get_theme_mod('about-description-settings');
                ?>
                </p>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

<?php

get_footer();

?>