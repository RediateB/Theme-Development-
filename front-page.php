
<?php
get_header();
?>
    <div>
        <img src="<?php bloginfo('template_url')?>/assets/images/wave.svg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1">
               
            </div>
            <div class="col-md-5">
                <div style="margin-top: 30px;" class="full">
                    <h1><strong class="cur">
                        <?php echo get_bloginfo( 'name' )?>
                    </strong><br></h1>
                        <p class="site_desc" id="site_desc1">
                        <?php echo get_bloginfo( 'description' )?>
                        </p>
                       
                </div>
            </div>
            <div class="col-md-4">
                <div class="full text_align_center">
                    <img class="slide_img" src="<?php bloginfo('template_url')?>/assets/images/undraw_education_f8ru.svg" width="100%" style="padding:10px; margin-top: 30px; margin-bottom: 50px; " alt="#" /> 
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
        
    
    <div class="container" style="margin-top: 150px;">
        <div class="row justify-content-md-center">
           <div class="card-group">
        <div class="card" style="margin-right: 30px;">
            <?php
                function get_admin_1_image_url() {
                    if ( get_theme_mod( 'Admin-image-1-settings' ) > 0 ) {
                        return wp_get_attachment_url( get_theme_mod( 'Admin-image-1-settings' ) );
                    } else {
                        return get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg';
                    }
                }
              ?>
            <img src="<?php echo esc_url( get_admin_1_image_url() ); ?>">
          <div class="card-body">
            <h3 class="card-title">
                <?php 
                    echo get_theme_mod('Admin-name-1-settings');
                ?>
            </h3>
            <p class="card-text">
                <?php 
                    echo get_theme_mod('Admin-description-1-settings');
                ?>            
            </p>
          </div>

        </div>


        <div class="card" style="margin-right: 30px;" >
          <?php
                function get_admin_2_image_url() {
                    if ( get_theme_mod( 'Admin-image-2-settings' ) > 0 ) {
                        return wp_get_attachment_url( get_theme_mod( 'Admin-image-2-settings' ) );
                    } else {
                        return get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg';
                    }
                }
            ?>
            <img src="<?php echo esc_url( get_admin_2_image_url() ); ?>">
          <div class="card-body">
            <h3 class="card-title">
            <?php 
                    echo get_theme_mod('Admin-name-2-settings');
                ?>
            </h3>
            <p class="card-text">
                <?php 
                    echo get_theme_mod('Admin-description-2-settings');
                ?> 
            </p>
          </div>
        </div>


        <div class="card">
              <?php
                function get_admin_3_image_url() {
                    if ( get_theme_mod( 'Admin-image-2-settings' ) > 0 ) {
                        return wp_get_attachment_url( get_theme_mod( 'Admin-image-3-settings' ) );
                    } else {
                        return get_template_directory_uri() . '/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg';
                    }
                }
                ?>
                <img src="<?php echo esc_url( get_admin_3_image_url() ); ?>">
          <div class="card-body">
            <h3 class="card-title">
            <?php 
                    echo get_theme_mod('Admin-name-3-settings');
                ?>
            </h3>
                <p class="card-text">
                  <?php 
                      echo get_theme_mod('Admin-description-3-settings');
                  ?>            
                </p>
          </div>
        </div>
      </div>

        </div>
    </div>

     <!-- we_do -->
     <div id="we_do"  class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 style="text-align: center; padding-bottom: 3rem;">What we do?</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="we_do_box we_do_box1">
                     <i><img src="<?php bloginfo('template_url')?>/assets/images/plan1.png" alt="#"/></i>
                     <h4>
                       <?php 
                       echo get_theme_mod('service-title-1-settings');
                       ?>
                        </h4>
                     <p> 
                     <?php 
                       echo get_theme_mod('service-body-1-settings');
                       ?>
                     </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="we_do_box we_do_box2">
                     <i><img src="<?php bloginfo('template_url')?>/assets/images/plan2.png" alt="#"/></i>
                     <h4>
                      <?php 
                        echo get_theme_mod('service-title-2-settings');
                        ?>
                     </h4>
                     <p> 
                      <?php 
                        echo get_theme_mod('service-body-2-settings');
                        ?>
                     </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="we_do_box we_do_box3">
                     <i><img src="<?php bloginfo('template_url')?>/assets/images/plan3.png" alt="#"/></i>
                     <h4> 
                        <?php 
                          echo get_theme_mod('service-title-3-settings');
                          ?>
                      </h4>
                     <p>
                        <?php 
                          echo get_theme_mod('service-body-3-settings');
                          ?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>

 
<div style="margin-bottom: 40px;"><hr> </div>
    <div class="conatiner">
        
    </div> 
    <div class="container" style="margin-top: 40px;">
    <h1 style="text-align: center; margin-bottom: 40px; font-weight: 700; background-color: #63ffc2; width: 100%; height: 100px; padding-top: 30px; margin-top: 150px; margin-bottom: 100px;" >Social Media</h1>
</div>
<div class="container">
    <div class="row">
    <div class="wrapper">
    <div class="content">
        <div class="col-md-6">
        <div class="text">
            <!-- <p>Check our social media platforms</p> -->
            <p>

                <a href="#" class="btn" style="padding-top:0px; padding-left:20px; margin-top:10px;">Get Started</a>
            </p>
        </div>
        </div>
        <div class="col-md-6">
        <div class="img">
            <div class="social-icons">
         <img src="<?php bloginfo('template_url')?>/assets/images/social-icon1.png" alt="#"/>
           <img src="<?php bloginfo('template_url')?>/assets/images/social-icon2.png" alt="#"/>
           <img src="<?php bloginfo('template_url')?>/assets/images/social-icon3.png" alt="#"/>
           <img src="<?php bloginfo('template_url')?>/assets/images/social-icon4.png" alt="#"/>
           <img src="<?php bloginfo('template_url')?>/assets/images/social-icon5.png" alt="#"/>
            </div>
           <img class="email-icon" src="<?php bloginfo('template_url')?>/assets/images/email-icon.png" alt="#"/>
        </div>
    </div>
</div>
    </div>
</div>
</div>

    <div class="container" style="margin-top: 100px;">
        <h1 style="text-align: center; margin-bottom: 40px; font-weight: 700; background-color: #63ffc2; width: 100%; height: 100px; padding-top: 30px; margin-top: 50px;" >Latest Blog</h1>

        <div class="row">
          <?php 
          $the_query = new WP_Query(array(
            'posts_per_page' => 3
          ));

          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts()) : $the_query->the_post();
          ?>
          
              <div class="card col pl-2 pr-2 ml-1 mr-1">
                <div class="card-body">
                  <h3 class="card-title"><?php the_title(); ?></h3>
                    <p>
                    <?php the_excerpt(); ?>
                    </p>
                </div>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>

              <?php else : ?>
              
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
                    </div>
        </div>

            
<?php
get_footer();

?>
