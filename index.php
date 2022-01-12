
<?php
get_header();
?>


<div class="body-container">
<div class="container row">
      <div class="blog-container col-8">
<?php
      if(have_posts()){
    while (have_posts()){
        the_post();?>

        <div class="blog">
          <div class="blog-category">
          <?php
          the_category();?>
          </div>
          <div class="blog-title">
          <a href="<?php the_permalink()?>"><?php the_title(); ?> </a>
          </div>

          <div class="blog-review">
          <?php
          the_excerpt();?>
            <span>
              <a href="#" class="read-more-link"> Read more… </a>
            </span>
          </div>
          <div class="blog-info">
            <p>
              By
              <span> <?php  the_author(); ?></span>
              /
              <span><?php the_date()?></span>
            </p>
          </div>
        </div>

        <hr class="blog-divider" />
        <?php    }
}
?>
        
      </div>

      <div class="sidebar-container col-4">
        <div class="input-group mb-3">
          <input
            type="text"
            class="form-control"
            placeholder="Search"
            aria-label="Search"
            aria-describedby="button-addon2"
          />
          <button class="btn search-btn" type="button" id="button-addon2">
            Search
          </button>
        </div>

        <!-- Recent post list-->
        <p class="recent-post-title">Recent Posts</p>

        <div class="recent-post-list-container">
            <ul class="recent-post-list">
                <?php 
                    // the query
                    $the_query = new WP_Query( array(
                        'posts_per_page' => 6,
                    )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <li class="recent-post-list-item">
                    <?php the_title(); ?>
                </li>  

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
            </ul>
        </div>
        <!-- End of Recent post list -->

        <!-- Post Category  -->
        <p class="recent-post-title">Recent Posts</p>

        <div class="recent-post-list-container">
          <ul class="recent-post-list">
          <?php 
                    // the query
                    $the_query = new WP_Query( array(
                        'posts_per_page' => 6,
                    )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <li class="recent-post-list-item">
                    <?php the_category(); ?>
                </li>  

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php __('No News'); ?></p>
                <?php endif; ?>
          </ul>
        </div>
        <!-- End of Post  -->
      </div>
    </div>

</div>


    <?php
get_footer();
?>