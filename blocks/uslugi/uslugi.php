<?php
$uslugi = get_posts( array( 'post_type' => 'uslugi', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title' ) );
?>

<div class="uslugi-list">
    <div class="uslugi-list__wraper">
        <?php if($uslugi) { ?>
        <ul>
            <?php foreach( $uslugi as $usluga ) :
                setup_postdata($usluga);?>
            <li>
                <div class="item-wraper">
                    <a href="<?php the_permalink($usluga->ID); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($usluga->ID); ?>" width="75px" height="75px" alt="<?php the_title(); ?>">
                        <h2> <?php echo get_the_title($usluga->ID); ?> </h2>
                    </a>
                    <p><?php echo get_the_excerpt($usluga->ID); ?></p>
                    <a class="c" href="<?php the_permalink($usluga->ID); ?>">Czytaj więcej</a>
                </div>
            </li>
            <?php endforeach; 
                wp_reset_postdata(); ?>
        </ul>
        <?php } ?>
    </div>
</div>
