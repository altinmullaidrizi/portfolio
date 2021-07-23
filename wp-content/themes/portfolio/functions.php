<?php


add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );
function portfolio_scripts() {
	wp_enqueue_style( 'portfolio-style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'portfolio-js', get_template_directory_uri() . '/js/bundle.js', '', '', true );
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu' )
) );

function wp_nav_menu_no_ul() {
	$options = array(
		'echo'           => false,
		'container'      => false,
		'theme_location' => 'primary',
		'fallback_cb'    => 'fall_back_menu'
	);

	$menu = wp_nav_menu( $options );
	echo preg_replace( array(
		'#^<ul[^>]*>#',
		'#</ul>$#'
	), '', $menu );
}

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page();

}

/*enable svg upload*/
function add_svg_to_upload_mimes( $upload_mimes ) {
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );



add_action( 'init', 'add_freebies_post_type' );
// Add Freebies Post Type
function add_freebies_post_type() {
	$labels = array(
		'name'               => _x( 'Freebies', 'post type general name' ),
		'singular_name'      => _x( 'Freebie', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'project' ),
		'add_new_item'       => __( 'Add New Project' ),
		'edit_item'          => __( 'Edit Project' ),
		'new_item'           => __( 'New Project' ),
		'all_items'          => __( 'All Freebies' ),
		'view_item'          => __( 'View Freebie' ),
		'search_items'       => __( 'Search Freebies' ),
		'not_found'          => __( 'No project found' ),
		'not_found_in_trash' => __( 'No project found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Freebie'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => '',
		'public'        => true,
		'menu_position' => 8,
		'menu_icon'	  => 'dashicons-heart',
		'capability_type' => 'page',
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'taxonomies', 'page-attributes' ),
		'hierarchical' => true,
		'has_archive'   => true,
		'show_in_rest' => true,
		'has_archive' => false,
	);
	register_post_type( 'freebies', $args );
}

function add_freebies_taxonomies()
{
	$labels = array(
		'name'              => _x('Categories', 'taxonomy general name'),
		'singular_name'     => _x('Category', 'taxonomy singular name'),
		'search_items'      => __('Search Categories'),
		'all_items'         => __('All Categories'),
		'parent_item'       => __('Parent Category'),
		'parent_item_colon' => __('Parent Category:'),
		'edit_item'         => __('Edit Category'),
		'update_item'       => __('Update Category'),
		'add_new_item'      => __('Add New Category'),
		'new_item_name'     => __('New Category'),
		'menu_name'         => __('Categories'),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public'       => true,
		'show_ui'      => true,
		'show_in_rest' => true
	);
	register_taxonomy('freebies_category', 'freebies', $args);
}
add_action('init', 'add_freebies_taxonomies', 0);

function add_works_post_type() {
	$labels = array(
		'name'               => _x( 'Works', 'post type general name' ),
		'singular_name'      => _x( 'Work', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'work' ),
		'add_new_item'       => __( 'Add New Work' ),
		'edit_item'          => __( 'Edit Work' ),
		'new_item'           => __( 'New Work' ),
		'all_items'          => __( 'All Works' ),
		'view_item'          => __( 'View Work' ),
		'search_items'       => __( 'Search Works' ),
		'not_found'          => __( 'No work found' ),
		'not_found_in_trash' => __( 'No work found in the Trash' ),
		'parent_item_colon'  => '',
		'menu_name'          => 'Works'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => '',
		'public'        => true,
		'menu_position' => 8,
		'menu_icon'	  => 'dashicons-media-archive',
		'capability_type' => 'page',
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'taxonomies', 'page-attributes' ),
		'hierarchical' => true,
		'has_archive'   => true,
		'show_in_rest' => true,
		'has_archive' => false,
	);
	register_post_type( 'works', $args );
}
add_action( 'init', 'add_works_post_type' );

/**
 * @param string $url <p>The url of svg file</p>
 *
 * @return false|string|null
 */
function readSvg($url){
	$upload_dir   = wp_upload_dir();
	$explode = explode('uploads', $url);
	if (count($explode) >0){
		$path = $upload_dir['basedir'].$explode[1];
		return file_get_contents($path);
	}
	return null;
}