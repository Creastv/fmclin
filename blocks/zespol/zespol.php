<?php
$zespol = get_field( 'zespol' );
?>


<div class="zespol">
    <div class="zespol__wraper">
        <?php if($zespol) { ?>
        <?php foreach($zespol as $person) { ?>
        <div class="osoba">
            <p><?php echo $person['imie_i_nazwisko']; ?></p>
            <?php if($person['pozycja']) { ?>
            <span><?php echo $person['pozycja']; ?></span>
            <?php } ?>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</div>
