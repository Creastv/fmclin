<?php
add_theme_support('post-thumbnails');
add_image_size( 'icon', 35, 35, array( 'center', 'center' ) );
add_image_size( 'post-item', 450, 300, array( 'center', 'center' ) );

if ( ! function_exists( 'go_register_nav_menu' ) ) {
    function go_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'go' ),
        ) );
    }
    add_action( 'after_setup_theme', 'go_register_nav_menu', 0 );
}
/* Add Multiple sidebar 
*/
if ( function_exists('register_sidebar') ) {
	$sidebar1 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',        
		'name'=>__( 'Footer 1', 'go' ),	
    'id'=> 'footer_1',
	);	
	$sidebar2 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',        
		'name'=>__( 'Footer 2', 'go' ),	
    'id'=> 'footer_2',
	);
    $sidebar3 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',        
		'name'=>__( 'Footer 3', 'go' ),	
    'id'=> 'footer_3',
	);
  $sidebar4 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',        
		'name'=>__( 'Footer 4', 'go' ),	
    'id'=> 'footer_4',
	);
  $sidebar5 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',        
		'name'=>__( 'Footer 5', 'go' ),	
    'id'=> 'footer_5',
	);
   $sidebar6 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',        
		'name'=>__( 'Sidebar usługi', 'go' ),	
    'id'=> 'sidebar_uslugi',
	);
   $sidebar7 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',        
		'name'=>__( 'Sidebar sticky sidebar', 'go' ),	
    'id'=> 'sidebar_sticky',
	);
	
	register_sidebar($sidebar1);
	register_sidebar($sidebar2);
  register_sidebar($sidebar3);
  register_sidebar($sidebar4);
  register_sidebar($sidebar5);
  register_sidebar($sidebar6);
  register_sidebar($sidebar7);
}
require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';
require get_template_directory() . '/func/acf.php';
require get_template_directory() . '/blocks/blocks.php';

// gutenberg editor
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/go-admin.min.css');
}
add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
// Paginacja
function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


function filter_plugin_updates( $value ) {
	$plugins = array(
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}

// colors
function ka_override_MCE_options($init)
  {
    $custom_colors = '
          "575289", "Main color",
          "9df7de", "Main 2 color",
          "ffe681", "Main 3 color",
          "0d0b1e", "Black",
          "545454", "Light black",
          "eeeef0", "Gray",
          "d7d7d7", "Gary dark",
      ';
    // build color grid palette
    $init['textcolor_map'] = '[' . $custom_colors . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
  }
  add_filter('tiny_mce_before_init', 'ka_override_MCE_options');

// Excerpt changing 3 dots
  Function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'new_excerpt_length', 999 );



if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => 'Fmclinic',
    'menu_title' => 'Fmclinic',
    'parent_slug' => 'themes.php',
  ));
}


/// modify the path to the icons directory
add_filter('acf_icon_path_suffix',
  function ( $path_suffix ) {
    return '/src/img/icons/'; // After assets folder you can define folder structure
  }
);


// function add_file_types_to_uploads($file_types){
// $new_filetypes = array();
// $new_filetypes['svg'] = 'image/svg+xml';
// $file_types = array_merge($file_types, $new_filetypes );
// return $file_types;
// }
// add_filter('upload_mimes', 'add_file_types_to_uploads');
