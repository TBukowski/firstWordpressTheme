<?php

/* 
    Template Name: Home Page Template
*/

get_header();
?>

<h1>HOME PAGE TEMPLATE</h1>
<img class="top_pic" src="<?php echo get_template_directory_uri(); ?>./consulting/main_img.png" alt="snowboarder">
                <div class="outside_block"> <!--wrench color-->
                    <img class="wrench one" src="<?php echo get_template_directory_uri(); ?>./consulting/icon3.png" alt="wrench">
                    <h2>SERVICES</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                        mauris id lorem ullamcorper imperdiet. Praesent sollicitudin
                        nulla semper massa feugiat mattis. Sed aliquam orci
                        dolor, sit amet fermentum purus congue non...</p>
                    <button>More Info</button>
                </div>
                <div class="inside_block">
                    <img class="wrench two" src="<?php echo get_template_directory_uri(); ?>./consulting/icon3.png" alt="wrench">
                    <h2>PROJECTS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                        mauris id lorem ullamcorper imperdiet. Praesent sollicitudin
                        nulla semper massa feugiat mattis. Sed aliquam orci
                        dolor, sit amet fermentum purus congue non...</p>
                    <button>More Info</button>
                </div>
                <div class="outside_block">
                    <img class="wrench three" src="<?php echo get_template_directory_uri(); ?>./consulting/icon3.png" alt="wrench">
                    <h2>CLIENTS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                        mauris id lorem ullamcorper imperdiet. Praesent sollicitudin
                        nulla semper massa feugiat mattis. Sed aliquam orci
                        dolor, sit amet fermentum purus congue non...</p>
                    <button>More Info</button>
                </div>
                <div class="goal">
                    <h2>THE WORLD CAN BE YOURS!</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>./consulting/building.png" alt="building">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                        mauris id lorem ullamcorper imperdiet.<br>
                    <br>Sollicitudin nulla semper massa feugiat mattis. Lorem ipsum 
                        dolor sit amet, consectetur adipiscing elit. Ut a
                        mauris id lorem ullamcorper imperdiet.<br>
                    <br>Praesent sollicitudin nulla semper massa feugiat mattis.<br><br>
                    <input type="submit" value="Learn more" id="goal_button">
                </div>
                <div class="testimonial">
                    <h2>TESTIMONIAL</h2>
                    <div class="arrow"></div>
                    <p>"I'm a testimonial. Click me to edit and add text that says 
                        something nice about you and your services."</p>
                </div>
                <p class="manager">Samantha Jones, Project Manager</p>

<?php get_footer();?>