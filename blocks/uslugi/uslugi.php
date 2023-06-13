<?php
$uslugi = get_posts( array( 'post_type' => 'uslugi', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title' ) );
$styl = get_field( 'styl' );
$styleClass = "";
if($styl == 2):
    $styleClass = "item-wraper--flex";
endif;
?>
<div class="uslugi-list">
    <div class="uslugi-list__wraper">
        <?php if($uslugi) { ?>
        <ul>
            <?php foreach( $uslugi as $usluga ) :
                setup_postdata($usluga);?>
            <li>
                <div class="item-wraper <?php echo $styleClass; ?>">
                    <?php if($styl == 1) : ?>
                    <a href="<?php the_permalink($usluga->ID); ?>">
                        <?php if ( has_post_thumbnail($usluga->ID) )  : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($usluga->ID); ?>" width="75px" height="75px" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <h2> <?php echo get_the_title($usluga->ID); ?> </h2>
                    </a>
                    <p><?php echo get_the_excerpt($usluga->ID); ?></p>
                    <a class="c" href="<?php the_permalink($usluga->ID); ?>">Czytaj więcej</a>
                    <?php endif; ?>

                    <?php if($styl == 2) : ?>
                    <a  href="<?php the_permalink($usluga->ID); ?>">
                        <?php if ( has_post_thumbnail($usluga->ID) )  : ?>
                         <img src="<?php echo get_the_post_thumbnail_url($usluga->ID); ?>" width="75px" height="75px" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <h2> <?php echo get_the_title($usluga->ID); ?> </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.332" height="30.332" viewBox="0 0 30.332 30.332">
                        <g id="arrow-right" transform="translate(2.223 2.223)">
                            <path id="Path_6" data-name="Path 6" d="M15.166,0A15.166,15.166,0,1,0,30.332,15.166,15.166,15.166,0,0,0,15.166,0Zm0,28.815A13.649,13.649,0,1,1,28.815,15.166,13.649,13.649,0,0,1,15.166,28.815Zm0,0" transform="translate(-2.223 -2.223)" fill="#1968af"/>
                            <path id="Path_7" data-name="Path 7" d="M171.734,128.16a.647.647,0,1,0-.852.974l4.62,4.042-4.62,4.043a.647.647,0,1,0,.852.974l5.177-4.53a.647.647,0,0,0,0-.974Zm0,0" transform="translate(-160.307 -120.234)" fill="#1968af"/>
                        </g>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </li>
            <?php endforeach; 
                wp_reset_postdata(); ?>
        </ul>
        <?php } ?>
    </div>
</div>
