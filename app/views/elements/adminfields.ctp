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
<?php if ( $user['Usuario']['perfil'] == 'admin' ) { ?> 
    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado'); ?></dt>
    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $currentModel['created']; ?>
            &nbsp;
    </dd>
    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado'); ?></dt>
    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $currentModel['modified']; ?>
            &nbsp;
    </dd>
    <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado por'); ?></dt>
    <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $currentModel['modified_by']; ?>
            &nbsp;
    </dd>
<?php } ?>