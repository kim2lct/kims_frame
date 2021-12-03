<?php 
	global $post; 	
	$id = $post->ID;
	$meta = get_post_custom($id);	
	$secondtitle = '';
	$taxonomy = get_queried_object();
	$tax_name = isset($taxonomy)?$taxonomy->name:'';
	$taxonomy_exists = isset($taxonomy->taxonomy)?$taxonomy->taxonomy:'';

	get_the_title();

	// main title
	if(is_home()){		
		$title = 'News';
	}else if(is_single()){
		$title = 'News';		
		if(!is_singular('post')){			
			$title = get_the_title();
		}		
	}
	else if(is_page()){
		$title = get_the_title($id);
	}else if(is_post_type_archive(get_post_type())){	
		$post_type = ucfirst(substr(get_post_type(),4));
		$title = apply_filters('pxa_post_type_title_'.get_post_type().'',$post_type,$title);
	}else if(is_tax($taxonomy_exists)){		
		$title = $tax_name;
	}else if(is_author()){		
		$title = get_the_author_meta('display_name');
	}else{		
		$title = 'News';
	}
?>
<?php if($meta['pg_show_header'] && $meta['pg_show_header'][0] == '1') : ?>
	<?php if($meta['pg_slider'] && $meta['pg_slider'][0] <> 'none') : ?>		
		<?php echo do_shortcode('[smartslider3 slider="'.$meta['pg_slider'][0].'"]') ?>
	<?php elseif($meta['pg_banner'][0]) : ?>
		<div role="banner" class="relative bg-cover bg-center bg-no-repeat py-32 sm:py-48" style="background-image: url(<?=$meta['pg_banner'][0]?>);">
			<div class="container mx-auto px-10 relative z-20">
				<?php echo formatterWrapper($meta['pg_subtitle'][0],'text-white text-2xl max-w-10 font-bold'); ?>
				<?php echo formatterWrapper($meta['pg_title'][0],'text-white text-5xl max-w-lg font-bold mb-5'); ?>
				<div class="max-w-md text-white text-sm"><?php echo wpautop($meta['pg_short_description'][0]); ?></div>
			</div>
			<div class="absolute bg-black top-0 w-full h-full opacity-40 z-10"></div>
		</div>

	<?php endif ?>
<?php endif ?>