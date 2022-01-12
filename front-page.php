<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- End of  Bootstrap CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <!-- <link rel="stylesheet" href="/wp-content/themes/ThemeDevelopment/css/style.css"> -->
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="homepage/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<?php
wp_head();
?>
</head>
<body>
<?php
get_header();
?>
    <div>
        <img src="wp-content/themes/Themedevelopment/assets/images/wave.svg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1">
               
            </div>
            <div class="col-md-5">
                <div style="margin-top: 30px;" class="full">
                    <h1><strong class="cur">EDU</strong><br>Get free education </h1>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                       
                </div>
            </div>
            <div class="col-md-4">
                <div class="full text_align_center">
                    <img class="slide_img" src="wp-content/themes/Themedevelopment/assets/images/undraw_education_f8ru.svg" width="100%" style="padding:10px; margin-top: 30px; margin-bottom: 50px; " alt="#" /> 
                </div>
            </div>
            <div class="col-md-1">
               
            </div>
        </div>
    </div>
        
    
    <div class="container" style="margin-top: 150px;">
        <div class="row">
           <div class="card-group">
        <div class="card" style="margin-right: 30px;">
          <img class="card-img-top" src="wp-content/themes/Themedevelopment/assets/images/sharon-mccutcheon-O2u6gA2esAI-unsplash.jpg"  alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
        <div class="card" style="margin-right: 30px;" >
          <img class="card-img-top" src="wp-content/themes/Themedevelopment/assets/images/aaron-burden-6jYoil2GhVk-unsplash.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="wp-content/themes/Themedevelopment/assets/images/md-duran-1VqHRwxcCCw-unsplash.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
           
          </div>
        </div>
      </div>

        </div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <h1 style="text-align: center; margin-bottom: 40px; font-weight: 700; background-color: #63ffc2; width: 100%; height: 100px; padding-top: 30px; margin-top: 150px; margin-bottom: 100px;" >About Us</h1>
    </div>
    <div style="margin-bottom: 40px;"><hr> </div>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <img src="wp-content/themes/Themedevelopment/assets/images/undraw_about_us_page_re_2jfm.svg" style="width: 100%; margin-bottom: 50px;" alt="">
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nam pariatur vero minus reprehenderit non minima modi voluptates harum, totam doloremque nobis impedit reiciendis? Molestiae accusantium modi cupiditate facilis dolorem!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime porro vero odio nostrum molestias illum quis, voluptate ratione? Ullam fugit voluptatibus nesciunt, consequuntur in explicabo nulla autem harum optio molestiae!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt labore quod eos iusto repellat facilis sequi mollitia saepe et voluptatibus sapiente hic, ad tempora in suscipit. Dignissimos dolore quam aspernatur!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa tenetur, maxime aut praesentium ea tempora culpa eius accusamus porro accusantium nulla eligendi rerum quos beatae! Illum, reiciendis sit. Officiis, minus!
                </p>
            </div>

        </div>
    </div>
    <div class="container" style="margin-top: 100px;">
        <h1 style="text-align: center; margin-bottom: 40px; font-weight: 700; background-color: #63ffc2; width: 100%; height: 100px; padding-top: 30px; margin-top: 50px;" >Latest Blog</h1>
    </div>

    
    <?php

get_footer();

?>
</body>
</html>
