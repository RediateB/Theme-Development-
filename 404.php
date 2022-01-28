<?php


get_header(); ?>

<div class="container text-center mt-5  ">

<img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/images/404.svg" style="width:40%;" alt="#"/>

    <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', ' '); ?></h1>
    </header><!-- .page-header -->
    <div class="page_content"></br><br>
     
   <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', ' '); ?></p>

        <?php get_search_form(); ?>

    </div><!-- .page-content -->
    



<?php
get_footer();
