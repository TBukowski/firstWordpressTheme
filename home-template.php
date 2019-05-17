<?php

/* 
    Template Name: Home Page Template
*/

get_header();
?>

<?php if (has_post_thumbnail()) : ?>
    <img class="top_pic" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="snowboarder">
<?php endif; ?>
                <div class="body_blocks">
                    <?php if (is_active_sidebar( 'left_block_1' )) : ?>
                        <div class="left_block block_widget">
                            <?php dynamic_sidebar( 'left_block_1' ); ?>
                            
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar( 'center_block_1' )) : ?>
                        <div class="center_block block_widget">
                            <?php dynamic_sidebar( 'center_block_1' ); ?>

                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar( 'right_block_1' )) : ?>
                        <div class="right_block block_widget">
                            <?php dynamic_sidebar( 'right_block_1' ); ?>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="bottom_content">
                    <div class="goal">
                        <div class="headline_pic">
                            <h2>THE WORLD CAN BE YOURS!</h2>
                            <?php
                                get_the_title( 'goals' )
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>./consulting/building.png" alt="building">
                        </div>
                            <?php
                                $args = array(
                                    'post_type' => 'goals',
                                    'posts_per_page' => 1 );
                                $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                        echo '<div class="goal_text">';
                                        get_the_title();
                                        the_content();
                            ?>
                                        <input type="submit" value="Learn more" id="goal_button">
                            <?php
                                        echo '</div>';
                                    endwhile
                            ?>
                            
                        <!-- </div> -->
                    </div>
                    <div class="testimonial">
                        <h2>TESTIMONIAL</h2>
                        <!-- <div class="arrow"></div> -->
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
                    </div>
                </div>
<?php get_footer();?>