<?php
$steps = get_field( 'steps' );

?>
<?php
if($steps) :
   
    echo '<div class="steps">';
        echo '<div class="steps__wraper">';
        foreach($steps as $step) :
            
            $active = $step["aktywny"] == 1 ? 'step--active' : '';
            echo ' <div class="step '. $active . ' " >';
                echo $step['ikona'] ? wp_get_attachment_image($step['ikona'], 'full' ) : false ;
                echo  $step['tytul'] ? '<h3>' . $step['tytul'] . '</h3>' : false ;
                echo  $step['opis'] ? '<p>' . $step['opis'] . '</p>' : false ;
                if($step['link']):
                    echo '<a class="btn" href=" ' . esc_url( $step['link']['url'] ) . ' " target="' .  esc_attr( $step['link']['target'] ? $step['link']['target'] : '_self'  ) . ' ">';
                    echo esc_html( $step['link']['title'] );
                    echo '</a>';
                endif;
            echo ' </div>';
        endforeach; 
        echo '</div>';
    echo '</div>';
    
endif;
?>
<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>