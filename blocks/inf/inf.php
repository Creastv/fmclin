<?php
$title = get_field( 'tytul' );
$info = get_field( 'info' );
$style = get_field( 'style' );
?>

<div class="inf inf--<?php echo $style; ?>">
    <div class="info__wraper">
        <?php if($info) { ?>
        <ul>
            <?php foreach($info as $inf){ ?>
            <li>
                <?php if($inf['link']) { ?>
                <a href="<?php echo $inf['link']?>">
                    <?php } ?>
                    <?php if($inf['icona']){ ?>
                    <div class="img">
                        <?php echo wp_get_attachment_image( $inf['icona'], 'icon');?>
                    </div>
                    <?php } ?>
                    <span><?php echo $inf['tekst']?></span>
                    <?php if($inf['link']) { ?>
                </a>
                <?php } ?>
            </li>
            <?php } ?>
        </ul>
        <?php } ?>

    </div>
</div>
