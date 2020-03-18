<?php
/*===============================
  Add stylesheets and javascripts files
=====================================*/
function custom_theme_scripts(){
  //Bootstrap CSS
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  //Main CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javescript Files
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts','custom_theme_scripts');

/*===============================
  Add stylesheets for ACF dashboard
=====================================*/
function adminACFStyles(){
//ACF CSS
wp_enqueue_style('acf', get_stylesheet_directory_uri() . '/admin/styles.css');
}
add_action('admin_head', 'adminACFStyles');

/*===============================
  Adds Featured Images
=====================================*/

add_theme_support('post-thumbnails');

/*===============================
  Custom post type
=====================================*/
if ( ! function_exists('truckInventory') ) {

// Register Custom Post Type
function truckInventory() {

	$labels = array(
		'name'                  => _x( 'Trucks', 'Post Type General Name', 'spring-2020' ),
		'singular_name'         => _x( 'Truck', 'Post Type Singular Name', 'spring-2020' ),
		'menu_name'             => __( 'Truck Inventory', 'spring-2020' ),
		'name_admin_bar'        => __( 'Truck Inventory', 'spring-2020' ),
		'archives'              => __( 'Truck Inventory', 'spring-2020' ),
		'attributes'            => __( 'Truck Attributes', 'spring-2020' ),
		'parent_item_colon'     => __( 'Parent Truck:', 'spring-2020' ),
		'all_items'             => __( 'All Trucks', 'spring-2020' ),
		'add_new_item'          => __( 'Add New Truck', 'spring-2020' ),
		'add_new'               => __( 'Add New Truck', 'spring-2020' ),
		'new_item'              => __( 'New Truck', 'spring-2020' ),
		'edit_item'             => __( 'Edit Truck', 'spring-2020' ),
		'update_item'           => __( 'Update Truck', 'spring-2020' ),
		'view_item'             => __( 'View Truck', 'spring-2020' ),
		'view_items'            => __( 'View Trucks', 'spring-2020' ),
		'search_items'          => __( 'Search Trucks', 'spring-2020' ),
		'not_found'             => __( 'Not found', 'spring-2020' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'spring-2020' ),
		'featured_image'        => __( 'Featured Image', 'spring-2020' ),
		'set_featured_image'    => __( 'Set featured image', 'spring-2020' ),
		'remove_featured_image' => __( 'Remove featured image', 'spring-2020' ),
		'use_featured_image'    => __( 'Use as featured image', 'spring-2020' ),
		'insert_into_item'      => __( 'Insert into item', 'spring-2020' ),
		'uploaded_to_this_item' => __( 'Uploaded to this truck', 'spring-2020' ),
		'items_list'            => __( 'Trucks list', 'spring-2020' ),
		'items_list_navigation' => __( 'Trucks list navigation', 'spring-2020' ),
		'filter_items_list'     => __( 'Filter Trucks list', 'spring-2020' ),
	);
	$args = array(
		'label'                 => __( 'Truck', 'spring-2020' ),
		'description'           => __( 'Truck Inventory', 'spring-2020' ),
		'labels'                => $labels,
		'supports'              => array( 'title','custom-fields', 'editor', 'thumbnail', 'revisions', 'post-formats' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'truck-inventory',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'trucks', $args );

}
add_action( 'init', 'truckInventory', 0 );

}

/*=======================================
Custom taxonomy
=========================================*/
// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {

  $labels = array(
    'name' => _x( 'Truck Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Truck Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Truck Types' ),
    'all_items' => __( 'All Truck Types' ),
    'parent_item' => __( 'Parent Truck Type' ),
    'parent_item_colon' => __( 'Parent Truck Type:' ),
    'edit_item' => __( 'Edit Truck Type' ),
    'update_item' => __( 'Update Truck Type' ),
    'add_new_item' => __( 'Add New Truck Type' ),
    'new_item_name' => __( 'New Truck Type Name' ),
    'menu_name' => __( 'Truck Types' ),
  );

  register_taxonomy('types',array('trucks'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}

/*========================================
Register ACF fields
===========================================*/
if( function_exists('acf_add_local_field_group') ){

acf_add_local_field_group(array (
	'key' => 'body-specifications',
	'title' => 'Body Specifications',
	'fields' => array (
		array (
			'key' => 'body-type',
			'label' => 'Body Type',
			'name' => 'body-type',
			'type' => 'text',
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
			'key' => 'body-make',
			'label' => 'Body Make',
			'name' => 'body-make',
			'type' => 'text',
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
			'key' => 'body-model',
			'label' => 'Body Model',
			'name' => 'body-model',
			'type' => 'text',
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
      'key' => 'body-capacity',
      'label' => 'Body Capacity',
      'name' => 'body-capacity',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'body-serial',
      'label' => 'Body Serial Number',
      'name' => 'body-serial',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'other-options',
      'label' => 'Other Body Options',
      'name' => 'other-options',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'trucks',
			),
		),
	),
));

acf_add_local_field_group(array (
	'key' => 'chassis-specifications',
	'title' => 'Chassis Specifications',
  'wrapper' => array(
    'width' => '50'
  ),
	'fields' => array (
		array (
			'key' => 'new-used',
			'label' => 'New/Used',
			'name' => 'new-used',
			'type' => 'select',
      'choices' => array(
        'new'	=> 'New',
        'used' => 'Used'
      ),
			'wrapper' => array (
				'width' => '100%',
			),
		),
    array (
      'key' => 'year',
      'label' => 'Year',
      'name' => 'year',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'make',
      'label' => 'Make',
      'name' => 'make',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'model',
      'label' => 'Model',
      'name' => 'model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'miles',
      'label' => 'Miles',
      'name' => 'miles',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'hours',
      'label' => 'Hours',
      'name' => 'hours',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-make',
      'label' => 'Engine Make',
      'name' => 'engine-make',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-model',
      'label' => 'Engine Model',
      'name' => 'engine-model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-hp',
      'label' => 'Engine HP',
      'name' => 'engine-hp',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'engine-brake',
      'label' => 'Engine Brake',
      'name' => 'engine-brake',
      'type' => 'select',
      'choices' => array(
        'yes'	=> 'Yes',
        'no' => 'No'
      ),
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'transmission-type',
      'label' => 'Transmission Type',
      'name' => 'transmission-type',
      'type' => 'select',
      'choices' => array(
        'automatic'	=> 'Automatic',
        'manual' => 'Manual'
      ),
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'transmission-make',
      'label' => 'Transmission Make',
      'name' => 'transmission-make',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'transmission-model',
      'label' => 'Transmission Model',
      'name' => 'transmission-model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'speeds',
      'label' => 'Speeds',
      'name' => 'speeds',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'front-axle-capacity',
      'label' => 'Front Axle Capacity',
      'name' => 'front-axle-capacity',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'rear-axle-capacity',
      'label' => 'Rear Axle Capacity',
      'name' => 'rear-axle-capacity',
      'type' => 'number',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'additional-axle',
      'label' => 'Additional Axle',
      'name' => 'additional-axle',
      'type' => 'select',
      'choices' => array(
        'yes'	=> 'Yes',
        'no' => 'No'
      ),
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'suspension',
      'label' => 'Suspension',
      'name' => 'suspension',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'suspension-model',
      'label' => 'Suspension Model',
      'name' => 'suspension-model',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'brakes',
      'label' => 'Brakes',
      'name' => 'brakes',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'ratio',
      'label' => 'Ratio',
      'name' => 'ratio',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'gvw',
      'label' => 'GVW',
      'name' => 'gvw',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'steering-configuration',
      'label' => 'Steering Configuration',
      'name' => 'steering-configuration',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'paint',
      'label' => 'Paint',
      'name' => 'paint',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'stock-number',
      'label' => 'Stock #',
      'name' => 'stock-number',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'price',
      'label' => 'Price',
      'name' => 'price',
      'type' => 'text',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
    array (
      'key' => 'gallery',
      'label' => 'Gallery',
      'name' => 'gallery',
      'type' => 'photo_gallery',
      'wrapper' => array (
        'width' => '100%',
      ),
    ),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'trucks',
			),
		),
	),
));
};

?>
