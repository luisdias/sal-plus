<?php
/**
    SAL - Sistema de Acompanhamento de Licitações
    Copyright (C) 2011  Smartbyte - Luís Dias

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    Contact : contato@smartbyte.com.br
 
 */
?>
<h3>Menu</h3>
<ul class="nav">
    <li><?php echo $this->Html->link(__('Licitações', true), array('controller' => 'licitacoes', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('Eventos', true), array('controller' => 'eventos', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('Lotes', true), array('controller' => 'lotes', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('Resultados', true), array('controller' => 'resultados', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('Contratantes', true), array('controller' => 'contratantes', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('Empresas', true), array('controller' => 'empresas', 'action' => 'index')); ?></li>
    <?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?>     
        <li><?php echo $this->Html->link(__('Modalidades', true), array('controller' => 'modalidades', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Tipos de licitações', true), array('controller' => 'tipolicitacoes', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Tipos de eventos', true), array('controller' => 'tipoeventos', 'action' => 'index')); ?></li>        
    <?php } ?>     
</ul>