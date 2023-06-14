<?php
$clor = get_field( 'kolor_tla' );
$image = get_field( 'zdjecie_w_tle' );
$height = get_field( 'wysokosc_tla_-_kolor' );
$posBg = get_field( 'pozycja_koloru' );

$bgImage = "background-image:url( $image );";
$bgColor = "background-color: $clor; ";
$bg = 'style=" ' . $bgImage . ' "';

$posBgSet =  $posBg == 1 ? 'top:0px ' : 'bottom:0px; ';

$he = "height: $height%;" ;
$bg2 = 'style=" ' . $bgColor . ''  . $he . ' ' . $posBgSet  . '  "';



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
    <div class="bg" <?php echo $bg2; ?>></div>
</div>
