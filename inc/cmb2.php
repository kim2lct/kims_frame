<?php 
	// all cmb2 custom file
	require_once get_template_directory().'/libs/CMB2/init.php';

	class BoxMeta {
		public function __construct(){					
			add_action( 'cmb2_admin_init', [$this,'register_pg_metabox'] );
		}

		public function register_pg_metabox() {

		global $wpdb;

		$cmb2 = new_cmb2_box( array(
			'id'           => 'register_pg_metabox',
			'title'        => esc_html__( 'Page Metabox', 'cmb2' ),
			'object_types' => array( 'page' ), // Post type
			'context'      => 'normal',
			'priority'     => 'high',
			'show_names'   => true, // Show field names on the left			
		) );

		// checking for plugins is activate
		if(is_plugin_active('smart-slider-3/smart-slider-3.php')){
			$options = [];
			$query = $wpdb->get_results( 
		    	"
				SELECT id, title 
		        FROM {$wpdb->prefix}nextend2_smartslider3_sliders
		        WHERE status = 'published'		        	        
		    	"
			);
			$options = cmb_slider($query);			

			$cmb2->add_field( array(
				'name' => esc_html__( 'Slider', 'cmb2' ),
				'desc' => esc_html__( 'add slider to header', 'cmb2' ),
				'id'   => 'pg_slider',
				'type' => 'select',
				'default'          => 'none',
				'options'          => $options,
			) );
		}

		$cmb2->add_field( array(
			'name' => esc_html__( 'Header Banner', 'cmb2' ),
			'desc' => esc_html__( 'add banner to header', 'cmb2' ),
			'id'   => 'pg_banner',
			'type' => 'file',
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Banner Header' // Change upload button text. Default: "Add or Upload File"
			),
			// query_args are passed to wp.media's library query.
			'query_args' => array(
				'type' => array(					
					'image/jpeg',
					'image/png',
				),
			),
			'preview_size' => 'large', // Image size to use when previewing in the admin.
		) );

		$cmb2->add_field( array(
			'name' => esc_html__( 'Header Title', 'cmb2' ),
			'desc' => esc_html__( 'add title to header', 'cmb2' ),
			'id'   => 'pg_title',
			'type' => 'text',
		) );

		$cmb2->add_field( array(
			'name' => esc_html__( 'Subtitle Title', 'cmb2' ),
			'desc' => esc_html__( 'add subtitle to header', 'cmb2' ),
			'id'   => 'pg_subtitle',
			'type' => 'text',
		) );

		$cmb2->add_field( array(
			'name' => esc_html__( 'Short Description', 'cmb2' ),
			'desc' => esc_html__( 'add short description to header', 'cmb2' ),
			'id'   => 'pg_short_description',
			'type' => 'textarea',
		) );

		$cmb2->add_field( array(
			'name' => esc_html__( 'Use Header?', 'cmb2' ),
			'desc' => esc_html__( 'show header to page', 'cmb2' ),
			'id'   => 'pg_show_header',
			'type' => 'select',
			'default'=>'1',
			'options'=>[
				'0'=>__('No','cmb2'),
				'1'=>__('Yes','cmb2')
			]
		) );

		}	
	}

	new BoxMeta();
	
	
