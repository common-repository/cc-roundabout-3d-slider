<?php
/******************
* Data Process
*******************/
/*Featured images support for ccrwp_*/
add_theme_support( 'post-thumbnails', array( 'slide' ) );
add_image_size( 'slide-image', 75, 75, true);
// Register Custom Post Type
function roundabout_post_type() {

	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'CC Slides', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent type:', 'text_domain' ),
		'all_items'           => __( 'All Slides', 'text_domain' ),
		'view_item'           => __( 'View Slide', 'text_domain' ),
		'add_new_item'        => __( 'Add New Slide', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Slide', 'text_domain' ),
		'update_item'         => __( 'Update Slide', 'text_domain' ),
		'search_items'        => __( 'Search Slide', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'slide',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Slide', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'slide', $args );

}

// Hook into the 'init' action
add_action( 'init', 'roundabout_post_type', 0 );
?>