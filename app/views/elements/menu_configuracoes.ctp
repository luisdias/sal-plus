<?php
/**
 * SAL Plus :: Sistema de Acompanhamento de Licitações e Contratos
 * Copyright : Luís E. S. Dias 2013
 * Contact   : smartbyte.systems@gmail.com
 */
?>
<h3>Menu</h3>
<ul class="nav">
    <?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?>     
        <li><?php echo $this->Html->link(__('Usuários', true), array('controller' => 'usuarios', 'action' => 'index')); ?></li>
    <?php } ?>     
</ul>

 