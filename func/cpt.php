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


//////////////////////////////////////////////////////////////Lekarze
function go_post_types_lekarze() {

	$labels = array(
		'name'               => 'Lekarze',
		'singular_name'      => 'Lekarze',
		'menu_name'          => 'Lekarze',
		'name_admin_bar'     => 'Lekarze',
		'all_items'          => 'Lekarze',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "lekarze", "with_front" => true ),
		'supports'      => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
		// , 'editor' 
	);
    register_post_type( 'lekarze', $args );

}
add_action( 'init', 'go_post_types_lekarze' );


add_action( 'init', 'go_taxonomy_lekarze', 0 );  
function go_taxonomy_lekarze() {
  $labels = array(
    'name' => _x( 'Kat', 'go' ),
    'singular_name' => _x( 'Kat', 'go' ),
    'search_items' =>  __( 'Szukaj Typ' ),
    'all_items' => __( 'Wszystkie Typy' ),
    'menu_name' => __( 'Kat' ),
  );    
  register_taxonomy('Kat',array('lekarze'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'kat-lekarzy' ),
  ));
}