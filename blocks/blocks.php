<?php
function register_acf_block_types() {
  //Done
    acf_register_block_type(array(
        'name'              => 'accordions',
        'title'             => __('Accordions'),
        'render_template'   => 'blocks/accordions/block-accordions.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Accordions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-accordions',  get_template_directory_uri() . '/blocks/accordions/accordions.min.css' );
          wp_enqueue_script('go-accordions', get_template_directory_uri().'/blocks/accordions/accordions.js', array( 'jquery' ),'4', true );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'btn',
      'title'             => __('Btn'),
      'render_template'   => 'blocks/btn/btn.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'btn' ),
    ));

    acf_register_block_type(array(
      'name'              => 'tytul',
      'title'             => __('Tytuł'),
      'render_template'   => 'blocks/tytul/tytul.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'		=> [
          'customClassName'	=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'tytul' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-tytul',  get_template_directory_uri() . '/blocks/tytul/tytul.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'opinions',
      'title'             => __('Opinie'),
      'render_template'   => 'blocks/opinions/opinions.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'		=> [
          'customClassName'	=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'opinions' ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-opinions_init',  get_template_directory_uri() . '/blocks/opinions/opinions.js',  array(), '20130456', true );
          wp_enqueue_style( 'go-opinions',  get_template_directory_uri() . '/blocks/opinions/opinions.min.css' );
      },
    )); 
     acf_register_block_type(array(
      'name'              => 'anchor',
      'title'             => __('Anchor'),
      'render_template'   => 'blocks/anchor/anchor.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'anchor' ),
    ));
    acf_register_block_type(array(
        'name'              => 'sticky-sidebar',
        'title'             => __('Sticky sidebar'),
        'render_template'   => 'blocks/sticky-sidebar/sticky-sidebar.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'sticky-sidebar' ),
       'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> false,
          'jsx' 			=> true,
        ],
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-sticky-sidebra',  get_template_directory_uri() . '/blocks/sticky-sidebar/sticky-sidebar.min.css' );
          wp_enqueue_script('go-sticky-sidebra-js', get_template_directory_uri() . '/blocks/sticky-sidebar/sticky-sidebar.js', array( 'jquery' ),'4', true );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'lekarze',
      'title'             => __('Lekarze slider'),
      'render_template'   => 'blocks/lekarze/lekarze.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'		=> [
          'customClassName'	=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'lekarze' ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-lekarze_init',  get_template_directory_uri() . '/blocks/lekarze/lekarze.js',  array(), '20130456', true );
          wp_enqueue_style( 'go-lekarze',  get_template_directory_uri() . '/blocks/lekarze/lekarze.min.css' );
      },
    )); 

    acf_register_block_type(array(
      'name'              => 'lekarze_by_cat',
      'title'             => __('Lekarze po kategori'),
      'render_template'   => 'blocks/lekarze/lekarze-by-cat.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'		=> [
          'customClassName'	=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'lekarze' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-lekarze',  get_template_directory_uri() . '/blocks/lekarze/lekarze.min.css' );
      },
    )); 

    acf_register_block_type(array(
      'name'              => 'partnerzy',
      'title'             => __('Partnerzy'),
      'render_template'   => 'blocks/partnerzy/partnerzy.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'supports'		=> [
          'customClassName'	=> true,
        ],
      'mode'            => 'preview', 
      'keywords'          => array( 'Partnerzy' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-partnerzy',  get_template_directory_uri() . '/blocks/partnerzy/partnerzy.min.css' );
      },
    )); 

    acf_register_block_type(array(
      'name'              => 'uslugi',
      'title'             => __('Usługi'),
      'render_template'   => 'blocks/uslugi/uslugi.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'uslugi' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-uslugi',  get_template_directory_uri() . '/blocks/uslugi/uslugi.min.css' );
      },
      
    ));

    acf_register_block_type(array(
      'name'              => 'container',
      'title'             => __('Container'),
      'render_template'   => 'blocks/container/container.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'container' ),
      'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> true,
          'jsx' 			=> true,
        ],
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-container',  get_template_directory_uri() . '/blocks/container/container.min.css' );
      },
      
    ));

    acf_register_block_type(array(
      'name'              => 'zespol',
      'title'             => __('Zespół'),
      'render_template'   => 'blocks/zespol/zespol.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'zespol' ),
      'supports'		=> [
          'align'			=> false,
          'anchor'		=> false,
          'customClassName'	=> true,
          'jsx' 			=> true,
        ],
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-zespol',  get_template_directory_uri() . '/blocks/zespol/zespol.min.css' );
      },
      
    ));

    acf_register_block_type(array(
      'name'              => 'inf',
      'title'             => __('Info sidebar'),
      'render_template'   => 'blocks/inf/inf.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'inf' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-inf',  get_template_directory_uri() . '/blocks/inf/inf.min.css' );
      },
    ));

    acf_register_block_type(array(
      'name'              => 'steps',
      'title'             => __('Steps'),
      'render_template'   => 'blocks/steps/steps.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'steps' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-steps',  get_template_directory_uri() . '/blocks/steps/steps.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'vote-bar',
        'title'             => __('Vote - bar'),
        'render_template'   => 'blocks/vote-bar/vote-bar.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Vote' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-vote-bar',  get_template_directory_uri() . '/blocks/vote-bar/vote-bar.min.css' );
      },
    ));
      acf_register_block_type(array(
        'name'              => 'posts',
        'title'             => __('Ostatnio dodane posty'),
        'render_template'   => 'blocks/recent-posts/recent-posts.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'recent-posts' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-recent-posts',  get_template_directory_uri() . '/blocks/recent-posts/recent-posts.min.css' );
      },
    ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
