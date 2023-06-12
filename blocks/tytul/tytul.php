<?php
$title = get_field( 'tytul' );
$dop = get_field( 'dopisek' );
$tag = get_field( 'tag' );

$class_name = 'b-title';
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' text-' . $block['align'];
}


if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo $class_name; ?> <?php echo esc_attr( $class_name ); ?>">
    <?php if($dop) { ?>
    <div class="b-title__dop">
        <span><?php echo $dop; ?></span>
    </div>
    <?php } ?>
    <<?php echo $tag; ?> class="b-title__h"><?php echo $title; ?> </<?php echo $tag; ?>>
</div>
