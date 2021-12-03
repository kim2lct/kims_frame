<?php
/**
 * The Page template file
 *
 * @package Pxa Framework
 * @since 1.0.0
 */

get_header(); ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container mx-auto px-5 lg:px-10">

                <?php
                if (have_posts()) :

                    /* Start the Loop */
                    while (have_posts()) : the_post();
                        
                        the_content();

                    endwhile;                    

                else :

                    get_template_part( 'templates/content', 'none' );

                endif;
                ?>
                </div>

            </main>
        </div>
<?php 
get_footer();
