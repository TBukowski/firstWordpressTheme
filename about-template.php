<?php 

/* 
    Template Name: About Page Template
*/

get_header();?>

    <?php if (has_post_thumbnail()) : ?>
        <img class="top_pic_about" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="building">
    <?php endif; ?>

    <?php

    if ( have_posts() ) : while ( have_posts() ) : the_post(); 

        the_content();

        endwhile;

    endif; ?>

    <?php
        $args = array(
            'post_type' => 'about',
            'posts_per_page' => 1 );
        $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                echo '<div class="about_text">';
                the_content();
                echo '</div>';
            endwhile
    ?>


<?php get_footer();?>