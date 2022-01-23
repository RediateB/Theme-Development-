<?php
get_header();
?>


<div class="main-layout">
    <!-- blog_main -->
    <?php 
            if(have_posts()){
              the_post();
              ?>
    <div class="blog_main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
            
            <div class="titlepage">
              <h2>
                <?php the_title(); ?>
              </h2>
              <span>Post By : <?php  the_author(); ?></span>
              <span class="left2">Date : <?php  the_date(); ?></span>
              <span class="left2">Comment  : <?php  comments_number(); ?></span>
            </div>
          
          </div>
        </div>


        <!-- Display posts -->
        
            <div class="row">
                <div class="col-md-12">
                  <div class="our_two_box pl-lx-5 pl-lg-5 pl-3 pr-3 pt-5">
                    <div class="our_text_box col-xl-11 col-lg-11 col-md-12 col-sm-12 p-1 ml-lg-5 ml-lx-5 mt-lx-5 mt-lg-5">
                        <div>
                        <figure class="single-page-thumbnail"><?php  the_post_thumbnail() ?></figure>
                            <p>
                              <?php
                                  the_content();?>
                            </p>
                        </div>
                            
                        <div class="post_box padding_bottom1">
                        </div>
                    </div>
                  </div>
                </div>
            </div>
      

        <!-- End Display posts -->
            <div class="row">
              <div class="col-md-12">
                  <div class="our_two_box pl-lx-5 pl-lg-5 pl-3 pr-3 pt-5">
                    <div class="our_text_box col-xl-11 col-lg-11 col-md-12 col-sm-12 p-1 ml-lg-5 ml-lx-5 mt-lx-5 mt-lg-5">
                        <?php comment_form()?>
                            
                        <div class="post_box padding_bottom1">
                        </div>
                    </div>
                  </div>
              </div>
            </div>


       
      </div>

      
    </div>
    <?php }
            ?>
    <!-- end blog_main -->
  </div>


    <?php
get_footer();
?>