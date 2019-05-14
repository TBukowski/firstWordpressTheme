<!DOCTYPE html>
<html lang="en">
    <head>
        <title>James Consulting</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrapper">
            <header class="header-container">
                <div class="logo">
                    <h1><a href="<?php echo home_url(); ?>"><span class="white">JAMES</span><span class="blue"> CONSULTING</span></a></h1>
                </div>                    
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