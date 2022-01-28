<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
 <!-- Bootstrap CDN -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- End of  Bootstrap CDN -->

    <!-- fevicon
    <link rel="icon" href="homepage/images/fevicon.png" type="image/gif" /> -->


 <!-- style css -->
 <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/style-ThemeDevelopment.css">
 <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/blog-page-style.css">
 
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container "> 
			<figure class="site-logo-img">
				<?php
					if(function_exists('the_custom_logo')){
						the_custom_logo();
					}
				?>
			</figure>
			<a class="navbar-brand header-link" href="#" ><?php bloginfo('name')?></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

    <?php
            wp_nav_menu( array(
                "theme_location" => 'top-menu',
                'depth' => '2',
                'container' => 'div',
                'container_id' => "bs-example-navbar-collapse-1",
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
                ) )
        ?>
  </div>
 </nav>