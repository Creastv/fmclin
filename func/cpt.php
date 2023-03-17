<?php 
//////////////////////////////////////////////////////////////offers
function go_post_types_uslugi() {

	$labels = array(
		'name'               => 'Usługi',
		'singular_name'      => 'Usługi',
		'menu_name'          => 'Usługi',
		'name_admin_bar'     => 'Usługi',
		'all_items'          => 'Usługi',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "uslugi", "with_front" => true ),
		'supports'      => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
		// , 'editor' 
	);
    register_post_type( 'uslugi', $args );

}
add_action( 'init', 'go_post_types_uslugi' );
