<?php
/**
 * SAL Plus :: Sistema de Acompanhamento de Licitações e Contratos
 * Copyright : Luís E. S. Dias 2013
 * Contact   : smartbyte.systems@gmail.com
 */
?>
<h3>Menu</h3>
<ul class="nav">
    <li><?php echo $this->Html->link(__('Contratos', true), array('controller' => 'contratos', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Aditivos', true), array('controller' => 'aditivos', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Ocorrências', true), array('controller' => 'ocorrencias', 'action' => 'index')); ?> </li>    
    <li><?php echo $this->Html->link(__('Recursos', true), array('controller' => 'recursos', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>    
    <?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?>    
        <li><?php echo $this->Html->link(__('Situações', true), array('controller' => 'situacoes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Reajustes', true), array('controller' => 'reajustes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Garantias', true), array('controller' => 'garantias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Tipos de aditivos', true), array('controller' => 'tipoaditivos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Tipos de ocorrências', true), array('controller' => 'tipoocorrencias', 'action' => 'index')); ?> </li>
    <?php } ?>
    <li><?php echo $this->Html->link(__('Recebimentos', true), array('controller' => 'recebimentos', 'action' => 'index')); ?> </li>        
</ul>  