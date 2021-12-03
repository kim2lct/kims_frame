<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 * 
 *
 * @package PXA Themes Content Post
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="content">
		<div class="post-title">
			<?php the_title('<h1>','</h1>'); ?>
		</div>
		<div class="meta-post">
				<span><?php echo '<i class="ion-person"></i> <span class="author">'.ucfirst(get_the_author()).'</span> / <span class="date"> <i class="ion-clock"></i> '.get_the_time('d-m-Y').'</span>'; ?> </span>
			</div>

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'pxa' ) );
			}
			?>

		</div><!-- .entry-content -->		
		<div class="content_author">
			<div class="author_wrapper">
				<div class="author">
					<a href="<?=get_author_posts_url(get_the_author_meta('ID'))?>">
						<?=get_avatar(get_the_author_meta('ID'))?>					
					</a>
				</div>
				<div class="author_description">
					<h5 class="title_author"><a href="<?=get_author_posts_url(get_the_author_meta('ID'))?>"><?=get_the_author_meta('display_name')?></a></h5>
					<?=wpautop(get_the_author_meta('description'))?>
				</div>
			</div>
		</div>

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'pxa' ) . '"><span class="label">' . __( 'Pages:', 'pxa' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);		

		?>

	</div><!-- .section-inner -->

	<?php 
	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( (comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->
