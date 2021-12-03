<div id="sidebar">
	<div class="sidebar-wrapper row">	
		<?php 
			if(is_home() || (is_search() && !is_post_type_archive('product'))  || is_singular('post') || is_archive() || is_category()){
				?>
				<div class="main-sidebar">
				<?php dynamic_sidebar( 'main-sidebar' ); ?>
				</div>
			<?php }else if((is_woocommerce()) && !is_product()   ){
				?>
					<div class="filter-product"><i class="ion-android-settings"></i> <span><?php echo __('Filter Search','pxa');?></span></div>

				<?php  dynamic_sidebar('woo-sidebar'); ?>

				<?php 
			}
		?>
	</div>
</div>