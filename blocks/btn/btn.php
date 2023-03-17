<?php 
$link = get_field( 'btn' );
if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' text-' . $block['align'];
}

?>
<div class="btn-wrap <?php echo esc_attr( $class_name ); ?>">
    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
</div>
