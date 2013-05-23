<?php 
    if ( $dias_restantes <= 15 )
        echo $this->Html->image('flag_red.png');
    if ( $dias_restantes > 15 &&  $dias_restantes <= 30 )
        echo $this->Html->image('flag_yellow.png');
    if ( $dias_restantes > 30 )
        echo $this->Html->image('flag_green.png');
?>