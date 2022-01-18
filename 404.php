<?php


get_header(); ?>

<div class="container text-center mt-5  ">


    <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', ' '); ?></h1>
    </header><!-- .page-header -->
    <div class="page_content"></br><br>
     
   <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', ' '); ?></p>

        <?php get_search_form(); ?>

    </div><!-- .page-content -->


</div><!-- .inner-wrap -->
<div class ="footer" align="center"  > 
      <!-- div align="center" -->
  </div>
<?php
get_footer();
