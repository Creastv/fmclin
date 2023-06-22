<?php
$title = get_field( 'tytul' );
$partnerzy = get_field( 'logotypy_partnerow' );
?>
<div class="partnerzy">
    <div class="partnerzy__wrap">
        <?php echo $title ? '<p>' . $title . '</p>': false; ?>
        <?php if($partnerzy) { ?> 
        <ul>
            <?php foreach($partnerzy as $partner) { ?>
            <li>
                <?php  echo wp_get_attachment_image( $partner['logo'], 'full' ); ?>
            </li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>
</div>