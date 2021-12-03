<?php
/** 
 *
 * @package PXA Themes Content
 * @since 1.0.0
 */

?>

<article <?php post_class('pxa_scrolling'); ?> id="post-<?php the_ID(); ?>" data-animated="fadeInUp">	
	<div class="post-inner row">
		<div class="post-header col-md-5">
			<div class="header-box box-wrapper">
				<a href="<?php the_permalink(); ?>">
				<?php 
				if(get_the_post_thumbnail()){
					the_post_thumbnail('post-size');
				}else{
					echo sprintf('<img src="%s" alt="%s">',get_stylesheet_directory_uri().'/images/preview.png',get_the_title());
				}
			 	?>	
			 	</a>
			</div>			
		</div>
		<div class="entry-content col-md-7">

			<div class="meta-post">
				<span><?php echo '<i class="ion-person"></i> <span class="author">'.ucfirst(get_the_author()).'</span> / <span class="date"> <i class="ion-clock"></i> '.get_the_time('d-m-Y').'</span>'; ?> </span>
			</div>

			<div class="post-title">
				<?php the_title('<h2>','</h2>'); ?>
			</div>
			<br>

			<?php
			if ( is_search() || ! is_singular() ) {		
				the_excerpt();
			} else {				
				the_content( __( 'Continue reading', 'pxa' ) );
			}
			?>

			<div class="readmore">
				<a class="btn" href="<?=get_the_permalink()?>">Read More</a>
			</div>

		</div>
	</div>
</article>
