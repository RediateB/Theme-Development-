
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
                            <figure><img src="images/our_img1.jpg" alt="#" /></figure>
                          </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                          <div class="our_text_box">
                            <h3 class="awesome pa_wi">
                                <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                            </h3>
                            <p>
                              It is a long established fact that a reader will be
                              distracted by the readable content of a page when looking
                              at its layout. The point of using Lorem Ipsum is that it
                              has a more-or-less normal distribution of letters, as
                              opposed to using 'Content here, content here', making it
                              look like readable English. Many desktop publishing
                              packages and web page editors now use Lorem Ipsum as their
                              default model
                            </p>
                            <div class="post_box padding_bottom1">
                              <h4 class="flot_left1">Post By : Blogger</h4>
                              <ul class="like">
                                <li>
                                  <a href="#">
                                  <img src="<?php bloginfo('template_url')?>/assets/images/like.png" alt="#" />
                                    Like
                                  </a>
                                </li>
                                <li>
                                  <a href="#"
                                    ><img src="images/comm.png" alt="#" />Comment</a
                                  >
                                </li>
                              </ul>
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
                      <figure><img src="images/our_img3.jpg" alt="#" /></figure>
                    </div>
                    <div class="our_text_box three_box">
                      <div class="post_box d_flex padding_top3">
                        <h3 class="awesome padding_flot">
                            <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                        </h3>
                        <h4 class="flot_left1">Post By : Blogger</h4>
                        <ul class="like padding_left2">
                          <li>
                            <a href="#">
                            <img src="<?php bloginfo('template_url')?>/assets/images/like.png" alt="#" />
                              Like
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <img src="images/comm.png" alt="#" />
                              Comment
                            </a>
                          </li>
                        </ul>
                      </div>
                      <p>
                        ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minimquis nostrud exercitation ullamco laboris
                      </p>
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
                        <figure><img src="images/our_img4.jpg" alt="#" /></figure>
                      </div>
                      <div class="our_text_box three_box">
                        <div class="post_box d_flex padding_top3">
                          <h3 class="awesome padding_flot">
                              <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                          </h3>
                          <h4 class="flot_left1">Post By : Blogger</h4>
                          <ul class="like padding_left2">
                            <li>
                              <a href="#">
                                <img src="<?php bloginfo('template_url')?>/assets/images/like.png" alt="#" />
                                Like
                              </a>
                            </li>
                            <li>
                              <a href="#">
                                <img src="images/comm.png" alt="#" />
                                Comment
                              </a>
                            </li>
                          </ul>
                        </div>
                        <p>
                          ipsum dolor sit amet, consectetur adipiscing elit, sed do
                          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                          enim ad minimquis nostrud exercitation ullamco laboris
                        </p>
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
                              <figure><img src="images/our_img5.jpg" alt="#" /></figure>
                            </div>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="our_text_box">
                              <h3 class="awesome pa_wi">
                                  <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
                              </h3>
                              <p>
                                ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id
                              </p>
                              <div class="post_box padding_bottom1">
                                <h4 class="flot_left1">Post By : Blogger</h4>
                                <ul class="like">
                                  <li>
                                    <a href="#">
                                      <img src="<?php bloginfo('template_url')?>/assets/images/like.png" alt="#" />
                                      Like
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#"
                                      ><img src="images/comm.png" alt="#" />Comment</a
                                    >
                                  </li>
                                </ul>
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