<?php 
$nav = get_field( 'navigacja' );
?>
<div class="b-sticky-con">
            <div class="b-sticky-con__wraper">
                <div class="col-1">
                    <InnerBlocks />
                </div>
                <?php if($nav) { ?>
                <div class="col-1">
                    <div class="sticky-nav">
                        <nav>
                            <ul>
                                <?php foreach($nav as $item) {
                                $link = $item['link'];  
                                if( $link ){
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                }
                                ?>
                                <li>
                                    <a class="dot" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </nav>
                       <?php if ( is_active_sidebar( 'sidebar_sticky' ) ) { ?>
                        <?php dynamic_sidebar('sidebar_sticky'); ?>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
</div>