<?php
$clor = get_field( 'kolor_tla' );
$image = get_field( 'zdjecie_w_tle' );

$bgImage = "background-image:url( $image );";
$bgColor = "background-color: $clor" ;
$bg = 'style=" ' . $bgImage . '  ' . $bgColor . ' "';

$class_name = 'custom-con';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr( $class_name ); ?>" <?php echo $bg; ?>>
    <div class="custom-con__wraper">
        <div class="container">
            <div class="row">
                <InnerBlocks />
            </div>
        </div>
    </div>
</div>
