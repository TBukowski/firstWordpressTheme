<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php the_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrapper">
            <header class="header-container">
                <?php
                    $_title_parts = explode( ' ', trim( get_bloginfo( 'name' ) ) );
                    if( ! empty( $_title_parts )): ?>
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>">
                                <h1>
                                    <span class="white"><?php echo esc_html( $_title_parts[0] ); ?></span>
                                    <?php if( count( $_title_parts ) > 1 ): ?>
                                        <span class="blue"> <?php echo implode( ' ', array_slice( $_title_parts, 1) ); ?></span>
                                    <?php endif; ?> <!--implode -->
                                </h1>
                            </a>
                        </div>
                    <?php endif;
                ?>
                                    
                <nav class="site_nav"> 

                    <?php

                        $args = array(
                            'theme_location' => 'primary'
                        );
                    
                    ?>

                    <?php wp_nav_menu( $args ); ?>
                    <!-- <ul>
                        <li class="home_top"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Clients</a></li>
                    </ul> -->
                </nav>
            </header>
            
            <div class="main_content">