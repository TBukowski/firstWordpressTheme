<?php

/* 
    Template Name: Home Page Template
*/

get_header();
?>

<h1>HOME PAGE TEMPLATE</h1>
<img class="top_pic" src="<?php echo get_template_directory_uri(); ?>./consulting/main_img.png" alt="snowboarder">
                <div class="body_blocks">
                    <?php if (is_active_sidebar( 'left_block_1' )) : ?>
                        <div class="outside_block left_block"> <!--wrench color-->
                            <img class="wrench one" src="<?php echo get_template_directory_uri(); ?>./consulting/icon3.png" alt="wrench">
                            <?php dynamic_sidebar( 'left_block_1' ); ?>
                            <!-- <h2>SERVICES</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                                mauris id lorem ullamcorper imperdiet. Praesent sollicitudin
                                nulla semper massa feugiat mattis. Sed aliquam orci
                                dolor, sit amet fermentum purus congue non...</p>
                            <button>More Info</button> -->
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar( 'center_block_1' )) : ?>
                        <div class="inside_block center_block">
                            <img class="wrench two" src="<?php echo get_template_directory_uri(); ?>./consulting/icon3.png" alt="wrench">
                            <?php dynamic_sidebar( 'center_block_1' ); ?>
                            <!-- <h2>PROJECTS</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                                mauris id lorem ullamcorper imperdiet. Praesent sollicitudin
                                nulla semper massa feugiat mattis. Sed aliquam orci
                                dolor, sit amet fermentum purus congue non...</p>
                            <button>More Info</button> -->
                        </div>
                    <?php endif; ?>


                    <?php if (is_active_sidebar( 'right_block_1' )) : ?>
                        <div class="outside_block right_block">
                            <img class="wrench three" src="<?php echo get_template_directory_uri(); ?>./consulting/icon3.png" alt="wrench">
                            <?php dynamic_sidebar( 'right_block_1' ); ?>
                            <!-- <h2>CLIENTS</h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                                mauris id lorem ullamcorper imperdiet. Praesent sollicitudin
                                nulla semper massa feugiat mattis. Sed aliquam orci
                                dolor, sit amet fermentum purus congue non...</p>
                            <button>More Info</button> -->
                        </div>
                    <?php endif; ?>

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
                    <?php
                        $args = array( 
                            'post_type' => 'testimonies', 
                            'orderby'   => 'rand',
                            'posts_per_page' => 1 );
                        $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                echo '<div class="entry-content">';
                                the_content();
                                echo '</div>';
                            endwhile
                    ?>        
                        <!-- <p>"I'm a testimonial. Click me to edit and add text that says 
                            something nice about you and your services."</p> -->
                </div>
                <!-- <p class="manager">Samantha Jones, Project Manager</p> -->

<?php get_footer();?>