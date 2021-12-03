<div x-data={show:false}>
<header class="header-wrapper py-3 fixed bg-white w-full z-10">
<div class="container mx-auto px-5 lg:px-10">
		<div class="flex gap-5 items-center justify-between">
			<div class="">
				<div class="logo px-2 max-w-xs">
						<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						 ?>
						 <a href="<?=home_url();?>">	
						 	<?php if($custom_logo_id) : ?>
						 	<img class="w-32" src="<?=$image[0]?>" alt="logo">
						 	<?php else : ?>
						 		<h3><?=get_bloginfo('name');?></h3>
						 	<?php endif; ?>
						 </a>					
				</div>
			</div>
			<div class="mobile block lg:hidden" role="navigation">
				<button x-data class="menu-block text-gray-600 cursor-pointer" @click="show = !show">
					<i class="fas fa-bars fa-2x"></i>
				</button>
			</div>	
			<div class="desktop hidden lg:block" role="navigation">
				<?php 
					wp_nav_menu( array(
						'menu'           => 'Primary Menu', // Do not fall back to first non-empty menu.
					    'theme_location' => 'primary_menu',
					    'container'=>false,
					        'items_wrap'     => '<ul id="primary_menu" class="sm:flex space-x-6">%3$s</ul>',
					    'fallback_cb'    => false // Do not fall back to wp_page_menu()
					) ); ?>				
			</div>				
			<div class="hidden lg:block" role="search">
				<?php get_search_form(); ?>
			</div>			
			
		</div>
		</div>		
				
</header>
<div 
	x-show="show" 	
	x-cloak
	x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
	>
			<div class="mobile-menu mobile block lg:hidden">
				<?php 
					wp_nav_menu( array(
						'menu'           => 'Primary Menu', // Do not fall back to first non-empty menu.
					    'theme_location' => 'primary_menu',
					    'container'=>false,
					        'items_wrap'     => '<ul id="primary_menu" class="menu-mobile">%3$s</ul>',
					    'fallback_cb'    => false // Do not fall back to wp_page_menu()
					) ); ?>			
			</div>
		</div>	
		</div>

<?php get_template_part('templates/title/post','title'); ?>
