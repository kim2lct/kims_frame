<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header(); ?>
<div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
            	<div class="container">                    
                    <div class="row">
                        <?php get_sidebar(); ?>  
                    <div class="main">

                <?php
                if (have_posts()) :

                    /* Start the Loop */
                    woocommerce_content();                    

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
                </div>
                                        
                </div>                
				</div>
            </main><!-- #main -->
        </div><!-- #primary -->        
    </div><!-- .wrap -->
<?php 
get_footer();
