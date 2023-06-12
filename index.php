<?php
get_header(); ?>
<?php if ( have_posts() ) : ?>
    <header class="entry-header">
    <h1 class="entry-title">
        <?php if($tytul) { ?>
        <?php echo $tytul; ?>
        <?php } else { ?>
        <?php if ( is_category() ) :
			single_cat_title();					
			elseif (is_404()) :
						_e( '404', 'go');
			elseif (is_page() ) :
						the_title();
			elseif ( is_tag() ) :
						single_tag_title();
			elseif ( is_author() ) :
						the_post();
						printf( __( '%s', 'go' ), get_the_author() );
						rewind_posts();
			elseif ( is_day() ) :
						printf( __( 'Dzień: %s', 'go' ), '<span>' . get_the_date() . '</span>' );
			elseif ( is_month() ) :
						printf( __( 'Miesiąc: %s', 'go' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
			elseif ( is_year() ) :
						printf( __( 'Rok: %s', 'go' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
			elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
						_e( 'Asides', 'go' );
			elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
						_e( 'Images', 'go');
			elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
						_e( 'Videos', 'go' );
			elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
						_e( 'Quotes', 'go' );
			elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
						_e( 'Links', 'go' );
			else :
						_e( 'Aktualności', 'go' );
			endif; ?>
        <?php } ?>
    </h1>
    <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>
<?php get_template_part( 'templates-parts/header/header', 'title' );  ?>
<div class="posts-wraper">
    <?php while ( have_posts() ) : the_post(); 
    get_template_part( 'templates-parts/content/content', 'index' ); 
    endwhile; ?>
    <?php if(paginate_links()) { ?>
    <div class="go-pagination">
        <?php pagination_bars(); ?>
    </div>
    <?php } ?>
    <div class="entry-content">
        <?php echo $content;  ?>
    </div>
</div>
<?php else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
endif;
get_footer();
