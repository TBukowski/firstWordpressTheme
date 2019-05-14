</div>      
            <nav class="footer"> 
                <?php

                    $args = array(
                        'theme_location' => 'footer'
                    );

                ?>

                    <?php wp_nav_menu( $args ); ?>
            </nav>
            <!-- <div class="footer">
                <ul>
                    <li class="home_bottom"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Clients</a></li>
                </ul>
            </div> -->
        </div>
        <?php wp_footer(); ?>
    </body>
</html>