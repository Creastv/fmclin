<?php
global $post;
$posts = get_posts( array( 'post_type' => 'uslugi', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title' ) );
$postID = get_the_ID();
?>

<article id="post-<?php the_ID(); ?>" class="single-uslugi hentry">
    <div class="single-uslugi__bg"></div>
    <div class="single-uslugi__header">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="75px" height="75px" alt="<?php the_title(); ?>">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>

    </div>
    <div class="single-uslugi__wraper">
        <div class="single-uslugi__container">
            <?php the_content(); ?>
        </div>
        <div class="single-uslugi__sidebar">
            <div class="single-uslugi__sidebar__wraper">
                <?php if( $posts ): ?>
                <h4><?php echo $postID; ?>Usługi</h4>
                <ul>
                    <?php foreach( $posts as $post ) :
                setup_postdata($post);?>
                    <li class="<?php echo $postID === $post->ID ? 'active' : null; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="35px" height="35px" alt="<?php the_title(); ?>">
                            <span>
                                <?php echo  $post->ID; ?> <?php the_title(); ?>
                            </span>
                        </a>
                    </li>
                    <?php endforeach; 
                wp_reset_postdata(); ?>
                </ul>
                <?php endif;?>
                <?php if ( is_active_sidebar( 'sidebar_uslugi' ) ) { ?>
                <?php dynamic_sidebar('sidebar_uslugi'); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</article>
