<?php


get_header(); ?>

<div class="container text-center mt-5  ">


    <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', ' '); ?></h1>
    </header><!-- .page-header -->
    <div class="page-content">
        <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', ' '); ?></p>

        <?php get_search_form(); ?>

    </div><!-- .page-content -->


</div><!-- .inner-wrap -->

<?php
get_footer();
