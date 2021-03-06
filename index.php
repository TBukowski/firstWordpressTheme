<?php get_header();?>
    <div class="index-content">
        <div class="index-main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <div class="content-area">
                            <h1 class="page-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="index-side">
            <?php if (is_active_sidebar( 'index_sidebar' )) : ?>
                <?php dynamic_sidebar( 'index_sidebar' ); ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer();?>