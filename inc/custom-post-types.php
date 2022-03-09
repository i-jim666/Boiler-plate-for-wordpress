<?php

// Our custom post type function
function create_posttype() {
 
    // Add register functions below

    // $labels = array(
	// 	'name'                => _x( 'Vaccination', 'Vaccination', 'cf_boiler_plate' ),
	// 	'singular_name'       => _x( 'Vaccination', 'Vaccination', 'cf_boiler_plate' ),
	// 	'menu_name'           => esc_html__( 'Vaccination', 'cf_boiler_plate' ),
	// 	'parent_item_colon'   => esc_html__( 'Parent Vaccination', 'cf_boiler_plate' ),
	// 	'all_items'           => esc_html__( 'All Vaccinations', 'cf_boiler_plate' ),
	// 	'view_item'           => esc_html__( 'View Vaccination', 'cf_boiler_plate' ),
	// 	'add_new_item'        => esc_html__( 'Add new Vaccination', 'cf_boiler_plate' ),
	// 	'add_new'             => esc_html__( 'Add new', 'cf_boiler_plate' ),
	// 	'edit_item'           => esc_html__( 'Edit Vaccination', 'cf_boiler_plate' ),
	// 	'update_item'         => esc_html__( 'Update Vaccination', 'cf_boiler_plate' ),
	// 	'search_items'        => esc_html__( 'Search Vaccination', 'cf_boiler_plate' ),
	// 	'not_found'           => esc_html__( 'Not Found', 'cf_boiler_plate' ),
	// 	'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'cf_boiler_plate' ),
	// );	

    // register_post_type( 'vaccination',
    
    // // CPT Options
    //     array(
    //         'labels' => $labels,
    //         'public' => true,
    //         'has_archive' => true,
    //         'rewrite' => array('slug' => 'vaccination'),
    //         'show_in_rest' => true,	
    //         'menu_icon' => 'dashicons-clipboard' // get dashicons from here https://developer.wordpress.org/resource/dashicons/#editor-paste-word
    //     )
    // );

}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

?>