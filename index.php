<?php
/**
 * The main template file
 *
 * @package Pxa Framework
 * @since 1.0.0
 */
get_header(); ?>
        <div id="primary" class="content-area">
                <div class="container mx-auto px-5 lg:px-10">
                    <div class="row wrapper">
                        <div class="col-md-9">
                <?php
                if (have_posts()) :

                    /* Start the Loop */
                    while (have_posts()) : the_post();
                        if(is_singular('post')){
                            get_template_part( 'templates/content', 'post');
                        }else{
                            get_template_part( 'templates/content', get_post_format() );
                        }

                    endwhile;

                    the_posts_pagination( array(
                        'prev_text'          => '<span class="pxa-icon-chevron-left"></span><span>' . esc_html__( 'Previous', 'pxa' ) . '</span>',
                        'next_text'          => '<span>' . esc_html__( 'Next', 'pxa' ) . '</span><span class="pxa-icon-chevron-right"></span>',
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'pxa' ) . ' </span>',
                    ) );

                else :

                    get_template_part( 'templates/content', 'none' );

                endif;
                ?>                    
                </div>
                <div class="col-md-3">
                    <?php get_sidebar(); ?>  
                </div>    

                
                </div>
                </div>            
        </div>
<?php get_footer();
