<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @package PXA Themes Content Shop
 * @since 1.0.0
 */


?>

<div <?php post_class(); ?> id="product-<?php the_ID(); ?>">
	<div class="box_wrapper">
		<div class="header-box">
			<a href="<?=get_the_permalink()?>">
			<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
			</a>
		</div>
		<div class="content-body product-body">
			<h3><a href="<?=get_the_permalink()?>"><?=get_the_title()?></a></h3>
			<?php		
				// price
				do_action( 'woocommerce_after_shop_loop_item_title' ); 
				// add to cart
				do_action( 'woocommerce_after_shop_loop_item' );

			?>
		</div>
	</div>
</div><!-- .post -->
