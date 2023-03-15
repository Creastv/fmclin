<?php

$sm = get_field( 'social_media', 'options' );
$pay = get_field( 'platnosci', 'options' );
$send = get_field( 'wysylka', 'options' );

?>
<div class="f-main">
    <div class="f-main__wraper">
        <div class="col">
            <a class="logo" href="/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/fm-clinic-logo-inverse.png" alt="Fmclinic">
            </a>
            <?php if ( is_active_sidebar( 'footer_1' ) ) { ?>
            <?php dynamic_sidebar('footer_1'); ?>
            <?php } ?>
        </div>
        <div class="col">
            <?php if ( is_active_sidebar( 'footer_2' ) ) { ?>
            <?php dynamic_sidebar('footer_2'); ?>
            <?php } ?>
        </div>
        <div class="col">
            <?php if ( is_active_sidebar( 'footer_3' ) ) { ?>
            <?php dynamic_sidebar('footer_3'); ?>
            <?php } ?>
        </div>
        <div class="col">
            <?php if ( is_active_sidebar( 'footer_4' ) ) { ?>
            <?php dynamic_sidebar('footer_4'); ?>
            <?php } ?>
        </div>
        <div class="col">
            <?php if ( is_active_sidebar( 'footer_5' ) ) { ?>
            <?php dynamic_sidebar('footer_5'); ?>
            <?php } ?>
        </div>
    </div>
</div>
