
<?php
$lekarze = get_field('lekarze');
if( $lekarze ):
    echo '<div class="b-lekarze">';
    echo ' <div class="swiper lek">';
    echo ' <div class="swiper-wrapper">';
    foreach( $lekarze as $lekarz ): 
        $permalink = get_permalink( $lekarz->ID );
        $title = get_the_title( $lekarz->ID );
        $pos = get_field( 'pozycja', $lekarz->ID );
         echo '<div class="swiper-slide">';
            echo ' <div class="lekarz">';
            echo ' <div class="avatar">';
            echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="103" viewBox="0 0 100 103">
            <circle id="Ellipse_1" data-name="Ellipse 1" cx="50" cy="50" r="50" fill="#edf7fc"/>
            <image id="user_1_" data-name="user (1)" width="72" height="86" transform="translate(14 17)" xlink:href="data:image/png;base64,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"/>
            </svg> ';
            echo '</div>';
            echo ' <div class="content">';
              echo '<h3> ' . $title . ' </h3>';
              echo  $pos  ? '<span> ' . $pos . ' </span>' : false;
              echo '<span class="position"></span>';
              echo the_excerpt(10);
            echo '</div>';
            echo '</div>';
         echo '</div>';
   endforeach; 
    echo ' </div>';
    echo ' </div>';
    echo ' </div>';
 endif;