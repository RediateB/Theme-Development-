
<?php
get_header();
?>


<div class="main-layout">
    <!-- blog_main -->
    <div class="blog_main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage">
              <h2>Our Blogs</h2>
              <span
                >It is a long established fact that a reader will be distracted
                by the readable content of a page
              </span>
            </div>
          </div>
        </div>


        <!-- Display posts -->
        <?php 
        if (have_posts()){
          $x = 0;
          while(have_posts()){
            the_post();
            // if x== 0
            if ($x == 0){ 
              $x ++;
              ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="our_two_box">
                      <div class="row d_flex">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                          <div class="our_img">
                          
                            <figure><?php  the_post_thumbnail() ?></figure>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                          <div class="our_text_box">
                            <h3 class="awesome pa_wi">
                                <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                            </h3>
                            <p>
                            <?php
                                the_excerpt();?>
                            </p>
                            <div class="post_box padding_bottom1">
                              <h4 class="flot_left1">Post By : <?php  the_author(); ?></h4>
                              <h4 class="flot_left1 left2">Date : <?php  the_date(); ?></h4>
                              <h4 class="flot_left1 left2">
                                <img src="<?php bloginfo('template_url')?>/assets/images/comm.png" alt="#" />
                                      <?php comments_number()?>
                              </h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php 
            continue;
            }
          // end of if x == 0
              // if x == 1 or x == 2
            if ($x == 1 || $x == 2){?>
              
                <?php
                if ($x == 1){
                  $x++;
                  ?>
                  <div class="row">
                  <div class="col-md-6 padding_bottom2">
                    <div class="our_img">
                      
                      <figure><?php  the_post_thumbnail() ?></figure>
                    </div>
                    <div class="our_text_box three_box">
                      <div class="post_box d_flex padding_top3">
                        <h3 class="awesome padding_flot">
                            <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                        </h3>

                        <p>
                          <?php
                                    the_excerpt();?>
                        </p>
                        <h4 class="flot_left1">Post By : <?php  the_author(); ?></h4>
                        <h4 class="flot_left1 left2">Date : <?php  the_date(); ?></h4>
                        <h4 class="flot_left1 left2">
                        <img src="<?php bloginfo('template_url')?>/assets/images/comm.png" alt="#" />
                              <?php comments_number()?>
                        </h4>
                      </div>
                      
                    </div>
                  </div>
               <?php
               continue;
                }
                if ($x == 2){
                  $x++;
                  ?>
                    <div class="col-md-6">
                      <div class="our_img">
                        <figure><?php  the_post_thumbnail() ?></figure>
                      </div>
                      <div class="our_text_box three_box">
                        <div class="post_box d_flex padding_top3">
                          <h3 class="awesome padding_flot">
                              <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                          </h3>

                          <p>
                        <?php
                                the_excerpt();?>
                        </p>
                          <h4 class="flot_left1">Post By : <?php  the_author(); ?></h4>
                          <h4 class="flot_left1 left2">Date : <?php  the_date(); ?></h4>
                          <h4 class="flot_left1 left2">
                              <img src="<?php bloginfo('template_url')?>/assets/images/comm.png" alt="#" />
                                    <?php comments_number()?>
                          </h4>
                        </div>
                        
                      </div>
                    </div>
                </div>
                <?php
                }
                ?>
              
            <?php 
            continue;
            }
            // end of x == 1 or x == 2


            // 3rd row
              if ($x == 3){
                $x = 0;
                ?>
                <div class="row">
                    <div class="col-md-12">
                      <div class="our_two_box magna_top90">
                        <div class="row d_flex">
                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="our_img">
                              <figure><?php  the_post_thumbnail() ?></figure>
                            </div>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="our_text_box">
                              <h3 class="awesome pa_wi">
                                  <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                              </h3>
                              <p>
                              <?php
                                the_excerpt();?>
                                
                              </p>
                              <div class="post_box padding_bottom1">
                                <h4 class="flot_left1">Post By : <?php  the_author(); ?></h4>
                                <h4 class="flot_left1 left2">Date : <?php  the_date(); ?></h4>
                                <h4 class="flot_left1 left2">
                                <img src="<?php bloginfo('template_url')?>/assets/images/comm.png" alt="#" />
                                      <?php comments_number()?>
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
             <?php 
            }
            // end of 3rd row
          }
          // end of while have_posts

        }
        // end of if have_posts
        ?>

        <!-- End Display posts -->

       
      </div>
    </div>
    <!-- end blog_main -->
  </div>


    <?php
get_footer();
?>