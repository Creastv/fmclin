<?php 
$link = get_field( 'btn' );
if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
$class_name = "";
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' text-' . $block['align'];
}

$style = get_field( 'styl' );
$classStyle = 'btn';
if ( ! empty( $style == 2 ) ) {
    $classStyle = ' btn-revers';
}

?>
<div class="btn-wrap <?php echo esc_attr( $class_name ); ?>">
    <a class="<?php echo $classStyle; ?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
</div>
