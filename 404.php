<?php
/**
 * The 404 template file
 *
 * @package Pxa Framework
 * @since 1.0.0
 */

get_header(); ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="row wrapper">
                    <div class="main">
                <?php
						get_template_part( 'templates/content', '404' );                    
                ?>
                    </div>
                </div>
                </div>

            </main>             
        </div>
<?php get_footer();
