<?php 
 // wp_enqueue_script()
 // Load add styles here

class Styles {

	public function __construct(){
		add_action( 'wp_enqueue_scripts', array( $this,'register_pxa_style'));			
		// add_action( 'admin_enqueue_scripts', array( $this,'register_admin_sc'),999);			

	}

	// load css front end data here 
	public function register_pxa_style(){				
		wp_enqueue_style( 'tailwind', get_template_directory_uri() .'/assets/css/tailwind.css',array(),'1.0','all' );	
		wp_enqueue_style( 'pxa', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	}


	public function register_admin_sc(){
		wp_enqueue_style( 'tailwind', get_template_directory_uri() .'/assets/css/tailwind.css',array(),'1.0','all' );	
	}
	
}

new Styles();