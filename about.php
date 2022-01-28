<?php
/**
 * Template Name: About Page
 * 
 */

get_header();
?>
<div class="container" style="margin-top: 40px;">
        <h1 style="text-align: center; margin-bottom: 40px; font-weight: 700; background-color: #63ffc2; width: 100%; height: 100px; padding-top: 30px; margin-top: 150px; margin-bottom: 100px;" >About Us</h1>
    </div>
    <div style="margin-bottom: 40px;"><hr> </div>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo esc_url( get_template_directory_uri() )?>/assets/images/edu.jpg" style="width: 100%; margin-bottom: 50px;" alt="">
            </div>
            <div class="col-md-5"style=" marign-right: 5px;">
                <h1>Edu online learning system</h1>
                <p> Edu is an oline learning wordpress theme.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Velit, nam pariatur vero minus reprehenderit non minima modi voluptates harum, totam doloremque nobis impedit 
                    reiciendis? Molestiae accusantium modi cupiditate facilis dolorem!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime porro vero odio nostrum molestias illu
                    m quis, voluptate ratione? Ullam fugit voluptatibus nesciunt, consequuntur in explicabo nulla autem harum
                     optio molestiae!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt labore quod eos iusto repellat facilis s
                    equi mollitia saepe et voluptatibus sapiente hic, ad tempora in suscipit. Dignissimos dolore quam aspernatu
                    r!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa tenetur, maxime aut praesentium ea tempora culpa 
                    eius accusamus porro accusantium nulla eligendi rerum quos beatae! Illum, reiciendis sit. Offici
                    is, minus!
                </p>
            </div>
            <div class="col-md-3" style="background-color: #63ffc2;">
                <div >
                    <div class="well">
                        <h2>Subscription Box</h2>
                        <p>Form Description Goes here</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                            </div>
                    </div>
                    <div class="well">
                        <h2>About Author</h2>
                        <img src="" class="img-rounded" />
                        <p>this is about our team</p>
                        <a href="#" class="btn btn-default">Read more</a>
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="#"> <h4 class="list-group-item-heading">course 1</h4> <p class="list-group-item-text">this course is recommended for you do you want to take.</p> </a>
                        <a class="list-group-item" href="#"> <h4 class="list-group-item-heading">course 2</h4> <p class="list-group-item-text">this course is recommended for you do you want to take.</p> </a>
                        <a class="list-group-item" href="#"> <h4 class="list-group-item-heading">course 3</h4> <p class="list-group-item-text">this course is recommended for you do you want to take..</p> </a> 
                    </div>  
                </div>
            </div>
        </div>
    </div>

<?php

get_footer();

?>