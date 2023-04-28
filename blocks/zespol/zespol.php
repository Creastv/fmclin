<?php
$zespol = get_field( 'zespol' );
?>


<div class="zespol">
    <div class="zespol__wraper">
        <?php if($zespol) { ?>
        <?php foreach($zespol as $person) { ?>
        <div class="osoba">
            <?php if($person['link']) { ?>
            <a class="go" href="<?php echo $person['link']; ?>" >
            <?php } ?>
            <h3><?php echo $person['imie_i_nazwisko']; ?></h3>
             <?php if($person['link']) { ?>
             </a>
            <?php } ?>
            <?php if($person['pozycja']) { ?>
            <span><?php echo $person['pozycja']; ?></span>
            <?php } ?>
            <?php if($person['krotki_opis']) { ?>
            <p><?php echo $person['krotki_opis']; ?></p>
             <?php if($person['link']) { ?>
            <a href="<?php echo $person['link']; ?>" >Czytaj więcej</a>
            <?php } ?>
            <?php } ?>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
</div>
