<?php
/* 
    Template Name: About Page Template
*/

 get_header();?>
    <div class="index-content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h1 class="page-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer();?>