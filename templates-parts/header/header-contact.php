<?php 
$link = get_field( 'link_', 'options' );
if( $link ) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}

$link_two = get_field( 'link_two', 'options' );
if( $link_two ) {
    $link_two_url = $link_two['url'];
    $link_two_title = $link_two['title'];
    $link_two_target = $link_two['target'] ? $link_two['target'] : '_self';
}

$inf = get_field( 'inf', 'options' );
?>
<div class="navbar__cta">
    <?php if($inf) { ?>
    <span class="text-right">
        <?php echo $inf; ?>
    </span>
    <?php } ?>

    <?php if($link) {  ?>
    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php } ?>

    <?php if($link_two) {  ?>
    <a class="btn-rev" href="<?php echo esc_url( $link_two_url ); ?>" target="<?php echo esc_attr( $link_two_target ); ?>"><?php echo esc_html( $link_two_title ); ?></a>
    <?php } ?>
</div>
